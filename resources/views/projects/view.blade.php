@extends('page-base')

@section('title', $project['title'].' – Creatief team zoekt BUDA')

@section('body_classes', 'hello '.$project['theme'])

@section('page-title', 'Portfolio')

@section('page-content')
    <article class="article">
        <div class="article__section article__section--full">
            <!-- Photo -->
            <div class="photo">
                <img src="{{ $project['cover'] }}" alt="{{ $project['title'] }}" />
            </div>
        </div>
        <header class="article__header">
            <div class="article__title">
                <!-- Title -->
                <h1 class="title">
                    {{ $project['title'] }}
                </h1>
            </div>
            <div class="article__intro article__intro--full">
                <!-- Two col -->
                <div class="two-col two-col--one-third">
                    <div class="two-col__col">
                        <!-- Wysiwyg -->
                        <div class="wysiwyg">
                            {!! $project['body'] !!}
                        </div>
                    </div>
                    <div class="two-col__col">
                        <!-- Data list -->
                        <div class="data-list">
                            <div class="data-list__group">
                                @foreach ($project['team'] as $t)
                                    <div class="data-list__item">
                                        {{ $t }}
                                    </div>
                                @endforeach
                            </div>
                            <div class="data-list__group">
                                @foreach ($project['tags'] as $t)
                                    <div class="data-list__item">
                                        {{ $t }}
                                    </div>
                                @endforeach
                            </div>
                            @if ($project['url'])
                                <div class="data-list__group">
                                    <div class="data-list__item">
                                        <a href="{{ $project['url'] }}" title="Website {{ $project['title'] }}" target="_blank">
                                            Bezoek website
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>

            </div>
        </header>
        @foreach ($project['images'] as $image)
            <div class="article__section article__section--full">
                <!-- Photo -->
                <div class="photo">
                    <img src="{{ $image }}" alt="{{ $project['title'] }}" />
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
