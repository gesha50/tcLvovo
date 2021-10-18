<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="yandex-verification" content="e78bf132c08294dc" />

    <title>{{ config('layouts.name', 'ТК Львово') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{asset('js/fontawesome.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
    <link href="{{ asset('css/scss.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/tclvovo.css') }}">
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
        <div class="container">
            <nav class="navbar fixed-top navbar-expand-md navbar-light shadow-sm navbar_edit">
                <img width="45px" src="/storage/без_фона.png" alt="">
                <a class="navbar-brand" href="/">
                    ТК Львово
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li ><a class="nav-link my-nav-link" href="/">Главная</a></li>
                        <li ><a class="nav-link my-nav-link" href="/company">О нас</a></li>
                        <li ><a class="nav-link my-nav-link" href="/services">Услуги</a></li>
                        <li ><a class="nav-link my-nav-link" href="/gallery">Фотогаллерея</a></li>
                        <li ><a class="nav-link my-nav-link" href="/contact">Контакты</a></li>
                        <li ><a class="nav-link my-nav-link" href="/news">Новости</a></li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <div class="search navbar-nav">

                    </div>
                </div>
            </nav>
        </div>
        <div>
            <div class="bgForBreadcrumb"></div>
            <div class="container-lg blockForBreadcrumb">
                <div class="d-flex justify-content-between p-2">
                    <h1 class="blockForBreadcrumb__header">Вход / Регистрация</h1>
                    <div class="blockForBreadcrumb__contact">
                        <a
                            class="blockForBreadcrumb__link"
                            href="/contact"
                        >Связаться с нами
                            <div class="line"></div>
                        </a>
                    </div>
                </div>
                <div class="text-white">
                    <a class="my_css  router-link-active" href="/"> Главная </a>  /  Вход
                </div>
            </div>
            <div style="margin-bottom: -237px" class="container-lg">
                <div class="companyContent">
                    <div class="d-flex topContent">
                        <div class="whiteBlock"></div>
                        <div class="clearBlock"></div>
                    </div>
                    <div style="position: relative; height: 238px" class="row">
                        <div class="list__triangle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-lg">
            <div style="background: white">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
        <div style="padding-left: -15px; background-color: #f3cc29;">
            <div class="container-fluid">
                <div class="request">
                    <div class="request__blockLeft">
                        <div class="request__text">Хотите арендовать помещение для торговли или склада?</div>
                    </div>
                    <div class="request__triangle"></div>
                    <div class="request__blockRight">
                        <div class="service__linkBlock">
                            <a class="service__link request__link" href="/contact">Оставть заявку
                                <div class="request__line"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footerMiddle d-flex flex-row flex-wrap">
                <div class="footerMiddle__block col-12 col-md-4">
                    <div class="footerLinks">
                        <div class="footerLinks__header">
                            Быстрые ссылки
                        </div>
                        <hr>
                        <ul class="footerLinks__body">
                            <li class="footerLinks__li">
                                <a href="/" class="footerLinks__link">Главная</a>
                            </li>
                            <li class="footerLinks__li">
                                <a href="/company" class="footerLinks__link">О нас</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footerMiddle__block col-12 col-md-4">
                    <div class="footerHours">
                        <div class="footerHours__header">
                            Часы работы
                        </div>
                        <hr>
                        <div class="footerHours__body">
                            <div class="footerHours__block d-flex justify-content-between">
                                <div class="footerHours__day flex-shrink-0">Пн - Пт:</div>
                                <div class="footerHours__line w-100"></div>
                                <div class="footerHours__time flex-shrink-0">8:00 - 22:00</div>
                            </div>
                            <div class="footerHours__block d-flex justify-content-between">
                                <div class="footerHours__day flex-shrink-0">Суббота:</div>
                                <div class="footerHours__line w-100"></div>
                                <div class="footerHours__time flex-shrink-0">8:00 - 23:00</div>
                            </div>
                            <div class="footerHours__block d-flex justify-content-between">
                                <div class="footerHours__day flex-shrink-0">Воскресенье:</div>
                                <div class="footerHours__line w-100"></div>
                                <div class="footerHours__time flex-shrink-0">8:00 - 22:00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footerMiddle__block col-12 col-md-4">
                    <div class="footerEmail">
                        <div class="footerEmail__header">
                            Обратная связь
                        </div>
                        <hr>
                        <div class="footerEmail__send">
                            <div class="d-flex">
                                <input
                                    name="email"
                                    type="email" class="footerEmail__input"
                                    placeholder="Введите ваш email">
                                <div class="footerEmail__fullBtn d-flex">
                                    <div class="footerEmail__btnLeft"></div>
                                    <button  class="footerEmail__btn">Отправить</button>
                                </div>
                            </div>
                        </div>
                        <div class="footerEmail__body">
                            <p>Мы с вами свяжемся в ближайшее время! Спасибо!</p>
                        </div>
                        <div class="footerEmail__footer">

                        </div>
                    </div>
                </div>
            </div>
            <div class="footerDown d-flex justify-content-around">
                <div class="footerDown__date"><p><?php echo date ( 'Y' ) ; ?></p>  ООО "БОССИКО"</div>
                <div class="footerDown__privacy"><a href="/policy">Политика конфиденциальности</a></div>
            </div>
        </footer>
    </div>

    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
</body>
</html>
