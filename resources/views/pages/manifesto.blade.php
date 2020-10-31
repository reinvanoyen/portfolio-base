@extends('page-base')

@section('body_classes', 'hello alt theme-5')

@section('page-title', 'Manifesto')

@section('page-content')
    <article class="article">
        <header class="article__header">
            <div class="article__title">
                <h1 class="title">Form Follows Function</h1>
            </div>
            <div class="article__intro">
                <p class="intro">
                    Wij zijn geen standaard team. Wij zijn een team met visie, standpunten en een mening.
                    Voor onze klant en voor de klant van onze klant. Werken voor een klant is niet ons doel.
                    Met een klant werken, en elkaars standpunten verweven tot één gemeenschappelijk project
                    waar alle partijen trots op kunnen zijn. Dát is waar wij naar streven.
                    En dit is ons idee erover.
                </p>
            </div>
        </header>
        <div class="article__section">
            <div class="text-block">
                <div class="text-block__title">
                    <h2 class="title title--medium">
                        <span class="title__offset">1.</span> Digital First
                    </h2>
                </div>
                <div class="text-block__content">
                    <div class="wysiwyg">
                        <p>
                            2020 maakt het ons meer dan duidelijk. In tijden als deze wordt van een mens, een bedrijf
                            en zéker van de cultuursector verwacht om <strong>flexibel</strong> te zijn en snel te schakelen. Op
                            budgetten werd reeds jaren ervoor beknipt. Meer dan ooit wordt er verwacht om
                            creatief te zijn en het web te omarmen. Waar vroeger de website slechts een afgeleide
                            was van de geprinte communicatie, wordt ondertussen duidelijk dat 2020 heel zeker
                            voor de ommekeer zorgt.
                        </p>
                        <p>
                            Nooit eerder werd er zo berust op <strong>digitale communicatie</strong>. Wij als hévige fans van het
                            web, marketing automation en social media streven er dan ook naar om deze als
                            minstens gelijkwaardig te beschouwen aan print.
                        </p>
                        <p>
                            En geloof ons, wie ten volle kan ontwerpen voor het dynamische web,
                            kan deze zeker en vast ook naar offline communicatie vertalen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="article__section">
            <div class="text-block">
                <div class="text-block__title">
                    <h2 class="title title--medium">
                        <span class="title__offset">2.</span> Branding must be easy on the eyes
                    </h2>
                </div>
                <div class="text-block__content">
                    <div class="wysiwyg">
                        <p>
                            Branding moet mooi zijn. Naar goede branding moet je willen kijken. Het moet de aandacht
                            op een positieve manier trekken. Het trendgevoelige aan het tijdloze linken. Een
                            knipoog naar het verleden, maar binnen tien jaar ook nog steeds mooi. Geen gemakkelijke
                            opgave, maar met gevoel voor estethiek én de juiste know-how veel haalbaarder.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="article__section">
            <div class="text-block">
                <div class="text-block__title">
                    <h2 class="title title--medium">
                        <span class="title__offset">3.</span> Branding must be dynamic
                    </h2>
                </div>
                <div class="text-block__content">
                    <div class="wysiwyg">
                        <p>
                            Een kunstencentrum als Buda is voortdurend in beweging. Een goede dynamic brand beweegt
                            mee met een organisatie. Dynamic branding wil zeggen dat het speelveld voor de branding
                            ruimer is dan bij traditionele branding. Wel worden er duidelijke spelregels opgesteld.
                            Een dynamic brand, daar kan je de toekomst mee in. Dit is een must in een voortdurend
                            veranderende wereld waar zowel online als offline media nooit stilstaan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="article__section">
            <div class="text-block">
                <div class="text-block__title">
                    <h2 class="title title--medium">
                        <span class="title__offset">4.</span> Easy to use is what people remember
                    </h2>
                </div>
                <div class="text-block__content">
                    <div class="wysiwyg">
                        <p>
                            Wanneer speelt die ene film? Hoe koop ik tickets? Wat is er dit weekend te doen? Deze en
                            nog zovele vragen moet Buda op een zo functioneel en aangenaam mogelijke manier kunnen
                            beantwoorden. Offline, maar ook steeds meer online. Een duidelijke affiche, een
                            handige website of een Instagram-post. Allen dragen ze bij aan hoe bezoekers het
                            kunstencentrum ervaren. De branding zelf is geen kunstwerk, de kunst moet net
                            gecreëerd en ervaren worden door mensen samen te brengen bij Buda.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </article>
@endsection

@section('page-prev')
    <!-- Link button-->
    <a href="{{ route('home') }}" title="Home" class="link-button">
        <span class="link-button__icon link-button__icon--before">
            @include('svg.arrow-left')
        </span>
        Home
    </a>
@endsection

@section('page-next')
    <!-- Link button -->
    <a href="{{ route('team') }}" title="Team" class="link-button">
        Team
        <span class="link-button__icon link-button__icon--after">
            @include('svg.arrow-right')
        </span>
    </a>
@endsection
