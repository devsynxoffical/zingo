<?php

return [
    // Single canonical origin for canonical tags, structured data and the sitemap.
    'base_url' => 'https://zingoassist.us',

    // Hosts that must permanently redirect to the canonical host.
    'redirect_hosts' => ['www.zingoassist.us'],

    // GA4 measurement ID (e.g. G-XXXXXXXXXX). Tracking stays off until this is set,
    // either here or via GA4_MEASUREMENT_ID in the server's .env.
    'ga4_measurement_id' => env('GA4_MEASUREMENT_ID', ''),
];
