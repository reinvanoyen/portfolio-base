<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Creatief team zoekt BUDA')</title>
    <base href="{{ url('/') }}" />

    <meta name="robots" content="noindex, nofollow" />
    <meta name="author" content="Rein Van Oyen" />
    <meta name="description" content="Creatief team zoekt BUDA"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta property="og:title" content="Creatief team zoekt BUDA" />
    <meta property="og:description" content="Maïté Maekelberg en Rein Van Oyen zoeken BUDA" />

    <meta property="twitter:image" content="{{ asset('img/og.png') }}" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('icon.png') }}" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png" />
    <meta name="theme-color" content="#000000">

    @yield('head')

</head>
<body class="@yield('body_classes')">
@section('body')
<div class="wrapper">
    <div class="loader">
        <div class="loader__inner"></div>
    </div>
    <div class="layout">
        <div class="layout__nav">
            <div class="layout__nav-wrap">
                <!-- Nav -->
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('home') }}" class="nav-item">
                                Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('about') }}" class="nav-item">
                                About
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('portfolio') }}" class="nav-item">
                                Portfolio
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('contact') }}" class="nav-item">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="layout__close">
                @include('components.atoms.close-button.default')
            </div>
        </div>
        <div class="layout__side">
            @include('components.atoms.hamburger.small')
        </div>
        <div class="layout__content">
            @section('content')
            @show
        </div>
    </div>
</div>
@show
<script src="{{ mix('js/app.js')  }}"></script>
</body>
</html>
