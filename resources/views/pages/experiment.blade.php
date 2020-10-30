@extends('page-base')

@section('body_classes', 'hello')

@section('page-title', 'Experiment')

@section('page-content')

    <!-- Article -->
    <article class="article">
        <header class="article__header">
            <div class="article__title">
                <!-- Title -->
                <h1 class="title">We Love to Play</h1>
            </div>
            <div class="article__intro">
                <!-- Intro -->
                <p class="intro">
                    Lorem Ipsum is slechts een proeftekst uit het drukkerij- en
                    zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze
                    bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een
                    zethaak met letters nam en ze door elkaar husselde om een fontcatalogus te maken.
                </p>
            </div>
        </header>
        <div class="article__section article__section--full">
            <!-- Photo -->
            <div class="photo">
                <img src="img/dummy.jpg" alt="Experiment" />
            </div>
        </div>
        <div class="article__section article__section--full">
            <!-- Photo -->
            <div class="photo">
                <img src="img/dummy.jpg" alt="Experiment" />
            </div>
        </div>
        <div class="article__section article__section--wide">

            <!-- Two col -->
            <div class="two-col">
                <div class="two-col__col">

                    <!-- Text block -->
                    <div class="text-block">
                        <div class="text-block__title">
                            <h3 class="title title--medium">Maïté Maekelberg</h3>
                        </div>
                        <div class="text-block__content">
                            @include('components.atoms.wysiwyg.default')
                        </div>
                        <div class="text-block__foot">
                            @include('components.atoms.button.default')
                        </div>
                    </div>

                </div>
                <div class="two-col__col">

                    <!-- Text block -->
                    <div class="text-block">
                        <div class="text-block__title">
                            <h3 class="title title--medium">Rein Van Oyen</h3>
                        </div>
                        <div class="text-block__content">
                            @include('components.atoms.wysiwyg.default')
                        </div>
                        <div class="text-block__foot">
                            @include('components.atoms.button.default')
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </article>

@endsection

@section('page-prev')
    <!-- Link button-->
    <a href="{{ route('inspiration') }}" title="Inspiratie" class="link-button">
        <span class="link-button__icon link-button__icon--before">
            @include('svg.arrow-left')
        </span>
        Inspiratie
    </a>
@endsection

@section('page-next')
@endsection
