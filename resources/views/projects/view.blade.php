@extends('page-base')

@section('title', $project->title.' – '.config('app.name'))

@section('page-title', 'Portfolio')

@section('head')
    <style type="text/css">
        :root {
            --primary-color: {{ $project->color }};
        }
    </style>
@endsection

@section('body_classes', 'hello custom-theme')

@section('page-content')

    <article class="article">
        <div class="article__section article__section--full">
            <!-- Photo -->
            <div class="photo">
                <img src="{{ conversion($project->photo, 'thumb') }}" alt="{{ $project->title }}" />
            </div>
        </div>
        <header class="article__header">
            <div class="article__title">
                <!-- Title -->
                <h1 class="title">
                    {{ $project->title }}
                </h1>
            </div>
            <div class="article__intro article__intro--full">
                <!-- Wysiwyg -->
                <div class="wysiwyg">
                    {{ $project->body }}
                </div>
            </div>
        </header>
        @foreach ($project->photos as $photo)
            <div class="article__section article__section--full">
                <!-- Photo -->
                <div class="photo">
                    <img src="{{ conversion($photo->photo, 'thumb') }}" alt="{{ $project->title }}" />
                </div>
            </div>
        @endforeach
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
