@php
    $siteUrl = rtrim(config('seo.base_url', url('/')), '/');
    $globalSchema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => ['Organization', 'ProfessionalService'],
                '@id' => $siteUrl . '/#organization',
                'name' => 'Zingo Assist',
                'alternateName' => 'ZingoAssist',
                'url' => $siteUrl . '/',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('assets/images/zingo-assist-logo.png'),
                    'width' => 842,
                    'height' => 303,
                ],
                'image' => asset('assets/images/zingo-assist-og.jpg'),
                'description' => 'Zingo Assist is a US virtual assistant agency providing real estate virtual assistants, cold calling, transaction coordination, lead generation, bookkeeping, CRM management and digital marketing services.',
                'telephone' => '+1-424-542-7170',
                'priceRange' => '$$',
                'publishingPrinciples' => $siteUrl . '/editorial-policy',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '7901 4th St N Ste 23684',
                    'addressLocality' => 'St. Petersburg',
                    'addressRegion' => 'FL',
                    'postalCode' => '33702',
                    'addressCountry' => 'US',
                ],
                'areaServed' => ['@type' => 'Country', 'name' => 'United States'],
                'contactPoint' => [
                    '@type' => 'ContactPoint',
                    'telephone' => '+1-424-542-7170',
                    'contactType' => 'sales',
                    'areaServed' => 'US',
                    'availableLanguage' => ['English'],
                ],
                'sameAs' => [
                    'https://www.linkedin.com/company/zingo-assist',
                    'https://www.facebook.com/p/Zingo-Assist-61559896551723',
                    'https://www.instagram.com/zingoassist/',
                ],
                'knowsAbout' => [
                    'Real estate virtual assistants',
                    'Real estate cold calling',
                    'Real estate transaction coordination',
                    'Virtual property management',
                    'Lead generation',
                    'CRM management',
                    'Bookkeeping',
                    'Real estate SEO',
                ],
            ],
            [
                '@type' => 'WebSite',
                '@id' => $siteUrl . '/#website',
                'url' => $siteUrl . '/',
                'name' => 'Zingo Assist',
                'publisher' => ['@id' => $siteUrl . '/#organization'],
                'inLanguage' => 'en-US',
            ],
        ],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($globalSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
