@extends('page-base')

@section('body_classes', 'hello alt theme-5')

@section('page-title', 'Manifesto')

@section('page-content')
    <article class="article">
        <header class="article__header">
            <div class="article__title">
                <h1 class="title">Form Follows Function</h1>
            </div>
            <div class="article__intro">
                <p class="intro">
                    Lorem Ipsum is slechts een proeftekst uit het drukkerij- en
                    zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze
                    bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een
                    zethaak met letters nam en ze door elkaar husselde om een fontcatalogus te maken.
                </p>
            </div>
        </header>
        <div class="article__section">
            <div class="text-block">
                <div class="text-block__title">
                    @include('components.atoms.title.medium')
                </div>
                <div class="text-block__content">
                    @include('components.atoms.wysiwyg.default')
                </div>
            </div>
        </div>
        <div class="article__section">
            <div class="text-block">
                <div class="text-block__title">
                    @include('components.atoms.title.medium')
                </div>
                <div class="text-block__content">
                    @include('components.atoms.wysiwyg.default')
                </div>
            </div>
        </div>
        <div class="article__section">
            <div class="text-block">
                <div class="text-block__title">
                    @include('components.atoms.title.medium')
                </div>
                <div class="text-block__content">
                    @include('components.atoms.wysiwyg.default')
                </div>
            </div>
        </div>
    </article>
@endsection

@section('page-prev')
    <!-- Link button-->
    <a href="{{ route('home') }}" title="Home" class="link-button">
        <span class="link-button__icon link-button__icon--before">
            @include('svg.arrow-left')
        </span>
        Home
    </a>
@endsection

@section('page-next')
    <!-- Link button -->
    <a href="{{ route('team') }}" title="Team" class="link-button">
        Team
        <span class="link-button__icon link-button__icon--after">
            @include('svg.arrow-right')
        </span>
    </a>
@endsection
