<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * 301-redirects duplicate hosts (e.g. www.zingoassist.us) to the canonical
 * origin so Google sees a single version of every URL.
 */
class CanonicalHost
{
    public function handle(Request $request, Closure $next): Response
    {
        $host = strtolower($request->getHost());

        $base = rtrim(config('seo.base_url'), '/');
        $canonicalHost = strtolower(parse_url($base, PHP_URL_HOST) ?: '');

        if (in_array($host, config('seo.redirect_hosts', []), true)) {
            return redirect()->away($base . $request->getRequestUri(), 301);
        }

        // Plain-HTTP request to the canonical host -> HTTPS. Only when the request
        // really arrived over port 80 and no proxy reports HTTPS, so it can never loop.
        $forwardedProto = strtolower((string) $request->headers->get('X-Forwarded-Proto', ''));
        if ($host === $canonicalHost
            && str_starts_with($base, 'https://')
            && ! $request->isSecure()
            && $forwardedProto !== 'https'
            && (int) $request->server('SERVER_PORT') === 80) {
            return redirect()->away($base . $request->getRequestUri(), 301);
        }

        return $next($request);
    }
}
