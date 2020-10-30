@extends('page-base')

@section('body_classes', 'hello theme-4')

@section('page-title', 'Portfolio')

@section('page-content')
    <!-- Article -->
    <article class="article">
        <!--
        <header class="article__header">
            <div class="article__title">
                <h1 class="title">
                    We Like to<br />
                    Show You
                </h1>
            </div>
        </header>
        -->
        @foreach ($projects as $p)
            <div class="article__section article__section--wide">
                <!-- Project item -->
                <a class="project-item project-item--alt-{{ rand(1, 3) }}" href="{{ route('project', ['projectSlug' => $p['slug'],]) }}">
                    <div class="project-item__photo">
                        <!-- Photo -->
                        <div class="photo">
                            <img src="{{ $p['cover'] }}" alt="{{ $p['title'] }}" />
                        </div>
                    </div>
                    <div class="project-item__label">Bekijk<br />project</div>
                </a>
            </div>
        @endforeach
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
