<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <title>Grafisch team zoekt BUDA</title>
    <base href="{{ url('/') }}" />

    <meta name="robots" content="index, follow" />
    <meta name="author" content="Rein Van Oyen" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta property="og:title" content="Sound of Ghent" />
    <meta property="og:description" content="De Gentse muziekscene brengt kwalitatieve livestreams tot bij jou in de living." />
    <meta property="og:image" content="{{ asset('img/og.png') }}" />
    <meta property="og:image:url" content="{{ asset('img/og.png') }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="627" />

    <meta property="twitter:image" content="{{ asset('img/og.png') }}" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('icon.png') }}" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

</head>
<body class="@yield('body_classes')">
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
                            <a href="{{ route('manifesto') }}" class="nav-item">
                                Manifesto
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('team') }}" class="nav-item">
                                Team
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('portfolio') }}" class="nav-item">
                                Portfolio
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('inspiration') }}" class="nav-item">
                                Inspiratie
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('experiment') }}" class="nav-item">
                                Experiment
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
<script src="{{ mix('js/app.js')  }}"></script>
</body>
</html>
