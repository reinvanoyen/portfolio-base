@extends('page-base')

@section('title', 'Experiment – Creatief team zoekt BUDA')

@section('body_classes', 'hello theme-3')

@section('page-title', 'Experiment')

@section('page-content')

    <!-- Overlay -->
    <div class="overlay">
        <div class="overlay__content">
            <!-- Modal -->
            <div class="modal">
                <div class="modal__close js-toggle-overlay">
                    <div class="modal__close-button"></div>
                </div>
                <div class="modal__content">
                    <!-- Text block -->
                    <div class="text-block">
                        <div class="text-block__title">
                            <h5 class="title title--medium">
                                First things first!
                            </h5>
                        </div>
                        <div class="text-block__content">
                            <!-- Wysiwyg -->
                            <div class="wysiwyg">
                                <p>
                                    Hands-on als we zijn, konden we de kans niet laten liggen om reeds vormelijk te
                                    experimenteren. Maar laat ons eerst samen aan tafel zitten alvorens wij onze aanzet
                                    volledig uit de doeken doen. Ideeën, enthousiasme en inspiratie genoeg! Toch zijn
                                    wij er van overtuigd dat luisteren naar én brainstormen met jullie tot een
                                    duidelijker eerste voorstel leidt. Een snel en efficiënt maar tegelijk
                                    doorgedreven proces, daar hebben we jullie hulp bij nodig. Dat is communicatie.
                                    Dat is teamwork.
                                </p>
                            </div>
                        </div>
                        <div class="text-block__foot">
                            <!-- Button -->
                            <a href="mailto:info@maitemaekelberg.be?subject=Re: Creatief team zoekt BUDA&body=Beste Maïté en Rein,%0D%0A%0D%0AGraag nodigen we jullie uit voor een eerste kennismaking!" class="button">
                                Ja, wij willen afspreken!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Article -->
    <section class="project-index">
        <div class="project-index__item">
            <!-- Photo -->
            <div class="photo js-toggle-overlay">
                <img src="img/experiment/01.jpg" alt="Experiment" />
            </div>
        </div>
        <div class="project-index__item">
            <!-- Photo -->
            <div class="photo js-toggle-overlay">
                <img src="img/experiment/02.jpg" alt="Experiment" />
            </div>
        </div>
        <div class="project-index__item">
            <!-- Photo -->
            <div class="photo js-toggle-overlay">
                <img src="img/experiment/03.png" alt="Experiment" />
            </div>
        </div>
        <div class="project-index__item">
            <!-- Photo -->
            <div class="photo js-toggle-overlay">
                <img src="img/experiment/04.jpg" alt="Experiment" />
            </div>
        </div>
        <div class="project-index__item">
            <!-- Photo -->
            <div class="photo js-toggle-overlay">
                <img src="img/experiment/05.png" alt="Experiment" />
            </div>
        </div>
    </section>

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
@endsection
