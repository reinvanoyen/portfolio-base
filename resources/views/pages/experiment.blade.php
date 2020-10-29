@extends('page-base')

@section('body_classes', 'hello')

@section('page-title', 'Experiment')

@section('page-content')
    @include('components.molecules.article.default')
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
    <!-- Link button -->
    <a href="{{ route('experiment') }}" title="Experiment" class="link-button">
        Contact
        <span class="link-button__icon link-button__icon--after">
            @include('svg.arrow-right')
        </span>
    </a>
@endsection
