#!/usr/bin/env python3
"""
Post-deploy search engine notification for zingoassist.us (runs in GitHub Actions).

1. Reads the live sitemap and selects URLs whose <lastmod> is today (UTC); the
   sitemap's lastmod comes from each view file's modification time, which is the
   upload time on the server, so these are the pages changed by this deploy.
2. Submits those URLs to IndexNow (Bing, Yandex, Seznam, Naver, Yep...).
3. If GSC_SERVICE_ACCOUNT_JSON is set: resubmits the sitemap to Google Search
   Console and logs the URL Inspection coverage state of each changed URL
   (read-only, within the documented API).

It does NOT use Google's Indexing API: Google restricts that API to JobPosting and
BroadcastEvent pages.

Environment:
  SITE_URL                  default https://zingoassist.us
  INDEXNOW_KEY              IndexNow key (key file must exist at SITE_URL/<key>.txt)
  GSC_SERVICE_ACCOUNT_JSON  service-account JSON (Owner on the Search Console property)
  GSC_PROPERTY              default https://zingoassist.us/
  CHANGED_SINCE_DAYS        include lastmod within N days (default 0 = today only)
"""
import datetime as dt
import json
import os
import re
import sys
import time

import requests

SITE = os.environ.get("SITE_URL", "https://zingoassist.us").rstrip("/")
PROPERTY = os.environ.get("GSC_PROPERTY", SITE + "/")
KEY = os.environ.get("INDEXNOW_KEY", "").strip()
DAYS = int(os.environ.get("CHANGED_SINCE_DAYS", "0") or 0)
UA = {"User-Agent": "zingo-deploy-bot/1.0"}


def changed_urls():
    for attempt in range(5):
        try:
            r = requests.get(f"{SITE}/sitemap.xml", headers=UA, timeout=30)
            r.raise_for_status()
            break
        except Exception as e:  # site may still be warming up after deploy
            print(f"sitemap fetch failed ({e}); retrying")
            time.sleep(10)
    else:
        print("Could not fetch sitemap; skipping.")
        return []
    since = (dt.datetime.now(dt.timezone.utc).date() - dt.timedelta(days=DAYS)).isoformat()
    urls = []
    for block in re.findall(r"<url>(.*?)</url>", r.text, re.S):
        loc = re.search(r"<loc>(.*?)</loc>", block)
        mod = re.search(r"<lastmod>(.*?)</lastmod>", block)
        if loc and mod and mod.group(1)[:10] >= since:
            urls.append(loc.group(1).strip())
    print(f"{len(urls)} sitemap URLs changed since {since}")
    for u in urls:
        print("  ", u)
    return urls


def indexnow(urls):
    if not KEY or not urls:
        print("IndexNow: skipped (no key or no changed URLs)")
        return
    host = re.sub(r"^https?://", "", SITE).split("/")[0]
    body = {"host": host, "key": KEY, "keyLocation": f"{SITE}/{KEY}.txt", "urlList": urls[:10000]}
    r = requests.post("https://api.indexnow.org/indexnow", json=body, headers=UA, timeout=30)
    print(f"IndexNow: HTTP {r.status_code} for {len(urls)} URLs (200/202 = accepted)")


def google(urls):
    raw = os.environ.get("GSC_SERVICE_ACCOUNT_JSON", "").strip()
    if not raw:
        print("Google: skipped (GSC_SERVICE_ACCOUNT_JSON secret not set)")
        return
    from google.oauth2 import service_account
    from google.auth.transport.requests import AuthorizedSession

    creds = service_account.Credentials.from_service_account_info(
        json.loads(raw), scopes=["https://www.googleapis.com/auth/webmasters"]
    )
    s = AuthorizedSession(creds)
    prop = requests.utils.quote(PROPERTY, safe="")
    sm = requests.utils.quote(f"{SITE}/sitemap.xml", safe="")
    r = s.put(f"https://www.googleapis.com/webmasters/v3/sites/{prop}/sitemaps/{sm}")
    print(f"Google sitemap resubmit: HTTP {r.status_code} {'' if r.ok else r.text[:300]}")

    for u in urls[:20]:  # URL Inspection quota is generous; keep the log short
        r = s.post(
            "https://searchconsole.googleapis.com/v1/urlInspection/index:inspect",
            json={"inspectionUrl": u, "siteUrl": PROPERTY},
        )
        if r.ok:
            st = r.json().get("inspectionResult", {}).get("indexStatusResult", {})
            print(f"  {st.get('coverageState', '?'):45} {u}  (last crawl {st.get('lastCrawlTime', 'never')})")
        else:
            print(f"  inspection failed HTTP {r.status_code}: {u}")


if __name__ == "__main__":
    urls = changed_urls()
    try:
        indexnow(urls)
    except Exception as e:
        print("IndexNow error:", e)
    try:
        google(urls)
    except Exception as e:
        print("Google API error:", e)
    sys.exit(0)  # never fail the deploy because of a notification problem
