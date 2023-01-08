@env('production')
    <!-- Google tag (gtag.js) -->
    @if ($code = config('lmmns.gtag.code'))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $code }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ $code }}');
        </script>
    @endif
@endenv