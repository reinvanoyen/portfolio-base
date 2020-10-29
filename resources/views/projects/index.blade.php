@extends('page-base')

@section('body_classes', 'hello')

@section('page-title', 'Portfolio')

@section('page-content')
    <!-- Article -->
    <article class="article">
        <header class="article__header">
            <div class="article__title">
                <!-- Title -->
                <h1 class="title">Portfolio</h1>
            </div>
            <div class="article__intro">
                @include('components.atoms.intro.default')
            </div>
        </header>
        <div class="article__section">
            @foreach ($projects as $p)
                <a class="button" href="{{ route('project', ['projectSlug' => $p['slug'],]) }}">
                    {{ $p['title'] }}
                </a>
            @endforeach
        </div>
    </article>
@endsection

@section('page-prev')
    <!-- Link button-->
    <a href="{{ route('team') }}" title="Team" class="link-button">
        <span class="link-button__icon link-button__icon--before">
            @include('svg.arrow-left')
        </span>
        Team
    </a>
@endsection

@section('page-next')
    <!-- Link button -->
    <a href="{{ route('inspiration') }}" title="Inspiratie" class="link-button">
        Inspiratie
        <span class="link-button__icon link-button__icon--after">
            @include('svg.arrow-right')
        </span>
    </a>
@endsection
