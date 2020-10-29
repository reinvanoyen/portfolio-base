@extends('page-base')

@section('body_classes', 'hello theme-3')

@section('page-title', 'Inspiratie')

@section('page-content')
    @include('components.molecules.photo-grid.default')
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
