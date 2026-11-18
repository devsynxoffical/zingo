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

        if (in_array($host, config('seo.redirect_hosts', []), true)) {
            $target = rtrim(config('seo.base_url'), '/') . $request->getRequestUri();

            return redirect()->away($target, 301);
        }

        return $next($request);
    }
}
