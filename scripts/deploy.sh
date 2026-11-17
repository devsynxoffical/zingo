#!/bin/bash
# Pull-based auto-deploy for cPanel.
# The server pulls the latest `main` from GitHub and copies it into the live
# site folder. Run it from a cPanel Cron Job (every 5 minutes) and/or from
# cPanel Git Version Control (.cpanel.yml). It only does work when GitHub has
# a new commit, so frequent runs are cheap.
#
# Defaults match this account; override with env vars if paths differ.
set -euo pipefail

REPO="${REPO:-$HOME/repositories/zingo}"      # cPanel Git Version Control clone
TARGET="${TARGET:-$HOME/zingoassist.us}"      # live Laravel app (contains artisan, public/)
BRANCH="${BRANCH:-main}"
PHP_BIN="${PHP_BIN:-php}"
LOCK="$HOME/.zingo-deploy.lock"

exec 9>"$LOCK"
flock -n 9 || { echo "$(date '+%F %T') another deploy is running"; exit 0; }

cd "$REPO"
git fetch -q origin "$BRANCH"
LOCAL="$(git rev-parse HEAD)"
REMOTE="$(git rev-parse "origin/$BRANCH")"
if [ "$LOCAL" = "$REMOTE" ] && [ "${FORCE:-0}" != "1" ]; then
    exit 0   # nothing new
fi
git reset -q --hard "origin/$BRANCH"
echo "$(date '+%F %T') deploying $(git log -1 --format='%h %s')"

# Files that must never be overwritten or published from the repo.
EXCLUDES=(
    --exclude './.git' --exclude './.github' --exclude './.env' --exclude './.env.*'
    --exclude './vendor' --exclude './storage' --exclude './bootstrap/cache'
    --exclude './node_modules' --exclude './tests' --exclude './docs'
    --exclude './scripts' --exclude './.cpanel.yml' --exclude './composer.phar'
    --exclude '*.ps1' --exclude './README.md' --exclude 'error_log'
)

if command -v rsync >/dev/null 2>&1; then
    # No --delete: server-only files (vendor, .env, uploads) are left alone.
    rsync -a "${EXCLUDES[@]//.\//\/}" "$REPO/" "$TARGET/"
else
    # Fallback for hosts without rsync.
    tar -C "$REPO" "${EXCLUDES[@]}" -cf - . | tar -C "$TARGET" -xf -
fi

# Clear Laravel caches so new routes/views/config take effect immediately.
cd "$TARGET"
"$PHP_BIN" artisan optimize:clear >/dev/null 2>&1 || {
    "$PHP_BIN" artisan view:clear  >/dev/null 2>&1 || true
    "$PHP_BIN" artisan route:clear >/dev/null 2>&1 || true
    "$PHP_BIN" artisan config:clear >/dev/null 2>&1 || true
}

echo "$(date '+%F %T') done"
