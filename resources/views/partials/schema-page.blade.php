{{--
    Per-page structured data.
    Usage: @include('partials.schema-page', [
        'type' => 'service' | 'article' | 'page',
        'name' => 'Page / service / headline name',
        'description' => '...',
        'breadcrumbs' => [['Services', route('service')]],   // Home is added automatically
        'faqs' => [['Question?', 'Answer.'], ...],            // optional
        'serviceType' => '...',                               // service only, optional
        'datePublished' => '2026-11-17', 'dateModified' => '2026-11-17', // article only
        'image' => asset(...),                                // optional
    ])
--}}
@php
    $siteUrl = rtrim(config('seo.base_url', url('/')), '/');
    $pageUrl = $siteUrl . (request()->path() === '/' ? '/' : '/' . request()->path());
    $canon = fn ($u) => is_string($u) ? preg_replace('#^https?://[^/]+#', $siteUrl, $u) : $u;
    $graph = [];

    $crumbs = [['Home', $siteUrl . '/']];
    foreach (($breadcrumbs ?? []) as $c) { $crumbs[] = [$c[0], $canon($c[1])]; }
    $crumbs[] = [$name, $pageUrl];
    $items = [];
    foreach ($crumbs as $i => $c) {
        $items[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $c[0], 'item' => $c[1]];
    }
    $graph[] = ['@type' => 'BreadcrumbList', '@id' => $pageUrl . '#breadcrumb', 'itemListElement' => $items];

    $pageType = $type ?? 'page';
    if ($pageType === 'service') {
        $graph[] = [
            '@type' => 'Service',
            '@id' => $pageUrl . '#service',
            'name' => $name,
            'serviceType' => $serviceType ?? $name,
            'description' => $description,
            'url' => $pageUrl,
            'provider' => ['@id' => $siteUrl . '/#organization'],
            'areaServed' => isset($areaServed) ? $areaServed : ['@type' => 'Country', 'name' => 'United States'],
        ];
    } elseif ($pageType === 'article') {
        $graph[] = [
            '@type' => 'BlogPosting',
            '@id' => $pageUrl . '#article',
            'headline' => $name,
            'description' => $description,
            'mainEntityOfPage' => $pageUrl,
            'url' => $pageUrl,
            'image' => $image ?? asset('assets/images/zingo-assist-og.jpg'),
            'datePublished' => $datePublished ?? null,
            'dateModified' => $dateModified ?? ($datePublished ?? null),
            'author' => ['@type' => 'Organization', 'name' => 'Zingo Assist Editorial Team', 'url' => $siteUrl . '/editorial-policy', 'parentOrganization' => ['@id' => $siteUrl . '/#organization']],
            'publisher' => ['@id' => $siteUrl . '/#organization'],
            'inLanguage' => 'en-US',
        ];
    } else {
        $graph[] = [
            '@type' => 'WebPage',
            '@id' => $pageUrl . '#webpage',
            'name' => $name,
            'description' => $description,
            'url' => $pageUrl,
            'isPartOf' => ['@id' => $siteUrl . '/#website'],
        ];
    }

    if (!empty($faqs)) {
        $graph[] = [
            '@type' => 'FAQPage',
            '@id' => $pageUrl . '#faq',
            'mainEntity' => array_map(fn ($f) => [
                '@type' => 'Question',
                'name' => $f[0],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
            ], $faqs),
        ];
    }

    $pageSchema = ['@context' => 'https://schema.org', '@graph' => array_values(array_map(fn ($n) => array_filter($n, fn ($v) => $v !== null), $graph))];
@endphp
<script type="application/ld+json">{!! json_encode($pageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
