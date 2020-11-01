@extends('page-base')

@section('body_classes', 'hello theme-3')

@section('page-title', 'Portfolio')

@section('page-content')
    <!-- Project index -->
    <section class="project-index">
        @foreach ($projects as $p)
            <div class="project-index__item">
                <!-- Project item -->
                <a class="project-item project-item--alt-{{ rand(1, 3) }}" href="{{ route('project', ['projectSlug' => $p['slug'],]) }}">
                    <div class="project-item__photo">
                        <!-- Photo -->
                        <div class="photo">
                            <img src="{{ $p['thumb'] }}" alt="{{ $p['title'] }}" />
                        </div>
                    </div>
                    <div class="project-item__label">Bekijk<br />project</div>
                </a>
            </div>
        @endforeach
    </section>

    <div class="article">
        <div class="article__section article__section--medium">
            <!-- Project list -->
            @include('components.molecules.project-list.default')
        </div>
    </div>

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
