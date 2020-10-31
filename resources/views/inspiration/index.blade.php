@extends('page-base')

@section('body_classes', 'hello theme-3')

@section('page-title', 'Inspiratie')

@section('page-content')

    <!-- Photo grid -->
    <div class="photo-grid">
        @foreach ($inspiration as $i)
            <div class="photo-grid__item">
                <!-- Photo item -->
                <div class="photo-item">
                    <div class="photo-item__photo">
                        <div class="photo">
                            <img src="{{ $i['cover'] }}" />
                        </div>
                    </div>
                    <div class="photo-item__source">
                        <span class="photo-item__author">{{ $i['author'] }}</span>
                        <span class="photo-item__project">{{ $i['title'] }}</span>
                        <a class="photo-item__icon" href="{{ $i['url'] }}" target="_blank">
                            @include('svg.arrow-right')
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection

@section('page-prev')
    <!-- Link button-->
    <a href="{{ route('portfolio') }}" title="Portfolio" class="link-button">
        <span class="link-button__icon link-button__icon--before">
            @include('svg.arrow-left')
        </span>
        Portfolio
    </a>
@endsection

@section('page-next')
    <!-- Link button -->
    <a href="{{ route('experiment') }}" title="Experiment" class="link-button">
        Experiment
        <span class="link-button__icon link-button__icon--after">
            @include('svg.arrow-right')
        </span>
    </a>
@endsection
