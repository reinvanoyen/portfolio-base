@extends('page-base')

@section('title', 'Portfolio – '.config('app.name'))

@section('body_classes', 'hello theme-3')

@section('page-title', 'Portfolio')

@section('page-content')
    <!-- Project index -->
    <section class="project-index">
        @foreach ($projects as $p)
            <div class="project-index__item">
                <!-- Project item -->
                <a class="project-item" href="{{ route('project', ['project' => $p->slug,]) }}">
                    <div class="project-item__photo">
                        <!-- Photo -->
                        <div class="photo">
                            <img src="{{ conversion($p->photo, 'thumb') }}" alt="{{ $p->title }}" />
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </section>

@endsection
