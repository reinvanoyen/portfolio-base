@extends('page-base')

@section('title', 'Manifesto – Creatief team zoekt BUDA')

@section('body_classes', 'hello alt theme-1')
@section('page-title', 'Home')

@section('page-content')
    <article class="article">
        <header class="article__header">
            <div class="article__title">
                <h1 class="title">Studio Maek</h1>
            </div>
            <div class="article__intro">
                <p class="intro">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                    also the leap into electronic typesetting, remaining essentially unchanged.
                </p>
            </div>
        </header>
        <div class="article__section">
            <div class="text-block">
                <div class="text-block__title">
                    <h2 class="title title--medium">
                        <span class="title__offset">1.</span> Digital First!
                    </h2>
                </div>
                <div class="text-block__content">
                    <div class="wysiwyg">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                            the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                            with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </article>
@endsection
