@extends('page-base')

@section('body_classes', 'hello '.$project['theme'])

@section('page-title', 'Portfolio')

@section('page-content')
    <article class="article">
        <header class="article__header">
            <div class="article__title">
                <h1 class="title">{{ $project['title'] }}</h1>
            </div>
            <div class="article__intro">
                <p class="intro">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nunc erat, viverra quis rutrum ut,
                    porttitor et ante. Fusce aliquet ex odio, nec convallis est sollicitudin quis. Nullam eu tincidunt
                    turpis. Donec condimentum libero nec leo tristique imperdiet. Curabitur mollis pulvinar neque at tempor.
                </p>
            </div>
        </header>
    </article>
@endsection

@section('page-prev')
    @if ($prevProject)
        <!-- Link button-->
        <a href="{{ route('project', ['projectSlug' => $prevProject['slug'],]) }}" title="{{ $prevProject['title'] }}" class="link-button">
            <span class="link-button__icon link-button__icon--before">
                @include('svg.arrow-left')
            </span>
            {{ $prevProject['title'] }}
        </a>
    @endif
@endsection

@section('page-index')
    <!-- Link button-->
    <a href="{{ route('portfolio') }}" title="Projecten" class="link-button">
        Alle projecten
    </a>
@endsection

@section('page-next')
    @if ($nextProject)
        <!-- Link button -->
        <a href="{{ route('project', ['projectSlug' => $nextProject['slug'],]) }}" title="{{ $nextProject['title'] }}" class="link-button">
            {{ $nextProject['title'] }}
            <span class="link-button__icon link-button__icon--after">
                @include('svg.arrow-right')
            </span>
        </a>
    @endif
@endsection
