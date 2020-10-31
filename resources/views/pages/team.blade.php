@extends('page-base')

@section('body_classes', 'hello alt theme-1')

@section('page-title', 'Team')

@section('page-content')

    <!-- Article -->
    <article class="article">
        <header class="article__header">
            <div class="article__title">
                <!-- Title -->
                <h1 class="title">Teamwork Makes the Dream work</h1>
            </div>
            <div class="article__intro">
                @include('components.atoms.intro.default')
            </div>
        </header>
        <section class="article__section article__section--wide">

            <!-- Two col -->
            <div class="two-col">
                <div class="two-col__col">

                    <!-- Text block -->
                    <div class="text-block">
                        <div class="text-block__title">
                            <h3 class="title title--medium">Maïté Maekelberg</h3>
                        </div>
                        <div class="text-block__content">
                            @include('components.atoms.wysiwyg.default')
                        </div>
                        <div class="text-block__foot">
                            <a href="maitemaekelberg-cv.pdf" class="button" target="_blank">Download CV</a>
                        </div>
                    </div>

                </div>
                <div class="two-col__col">

                    <!-- Text block -->
                    <div class="text-block">
                        <div class="text-block__title">
                            <h3 class="title title--medium">Rein Van Oyen</h3>
                        </div>
                        <div class="text-block__content">
                            <div class="wysiwyg">
                                <p>
                                    Rein werd gebeten door het web lang voordat Facebook een ding was. Rein heeft een
                                    sterke drang om creatief bezig te zijn. Die drang vond al vroeg zijn weg naar
                                    het "prutsen" met computers. Dat prutsen is ondertussen verandert in verdomd goed
                                    weten met wat hij bezig is. Het is dan ook al meer dan tien jaar lang zijn broodwinning.
                                    Of het nog steeds even leuk is als vroeger? Natuurlijk, het web evolueert
                                    sneller en sneller, dus aan uitdagingen geen gebrek!
                                </p>
                                <p>
                                    Rein is niet "your typical basement nerd". Graag denkt hij ook mee over het
                                    vormelijke. En daar heeft hij nog oog voor ook.
                                </p>
                            </div>
                        </div>
                        <div class="text-block__foot">
                            <!-- Button -->
                            <a href="reinvanoyen-cv.pdf" class="button" target="_blank">Download CV</a>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <div class="article__section article__section--small">
            @include('components.atoms.quote.default')
        </div>
    </article>

@endsection

@section('page-prev')
    <!-- Link button-->
    <a href="{{ route('manifesto') }}" title="Manifesto" class="link-button">
        <span class="link-button__icon link-button__icon--before">
            @include('svg.arrow-left')
        </span>
        Manifesto
    </a>
@endsection

@section('page-next')
    <!-- Link button -->
    <a href="{{ route('portfolio') }}" title="Portfolio" class="link-button">
        Portfolio
        <span class="link-button__icon link-button__icon--after">
            @include('svg.arrow-right')
        </span>
    </a>
@endsection
