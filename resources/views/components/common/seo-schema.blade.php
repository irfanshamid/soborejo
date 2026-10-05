@php
    $siteName = $settings->title ?? 'PT Soborejo';
    $siteUrl = rtrim(config('app.url'), '/');
    $logoUrl = ! empty($settings?->logo)
        ? asset('storage/'.$settings->logo)
        : asset('assets/images/favicon.png');

    $organization = array_filter([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $siteName,
        'url' => $siteUrl,
        'logo' => $logoUrl,
        'description' => $settings->description ?? null,
        'email' => $settings->email ?? null,
        'telephone' => $settings->phone ?? null,
        'address' => ! empty($settings?->address) ? [
            '@type' => 'PostalAddress',
            'streetAddress' => $settings->address,
            'addressCountry' => 'ID',
        ] : null,
    ]);

    $website = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => $siteName,
        'url' => $siteUrl,
        'inLanguage' => 'id-ID',
        'publisher' => [
            '@type' => 'Organization',
            'name' => $siteName,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $logoUrl,
            ],
        ],
    ];
@endphp

<script type="application/ld+json">{!! json_encode($organization, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode($website, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
@stack('schema')
