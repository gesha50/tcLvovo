<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="yandex-verification" content="e78bf132c08294dc" />

    <title>{{ config('layouts.name', 'ТК Львово') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <!-- Scripts -->
{{--    <script defer src="/js/brands.js"></script>--}}
{{--    <script defer src="/js/solid.js"></script>--}}
{{--    <script defer src="/js/fontawesome.js"></script>--}}
    <script src="{{asset('js/fontawesome.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
    <link href="{{ asset('css/scss.css') }}" rel="stylesheet" />
</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(82703191, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/82703191" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div id="app">
    <router-view></router-view>
</div>
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
</body>
</html>
