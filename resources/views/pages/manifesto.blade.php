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
                    Voor onze klant en voor de klant van onze klant. Ons doel is niet werken voor iemand, maar mét
                    iemand. Zo worden standpunten verweven tot één gemeenschappelijk project waar alle partijen trots
                    op kunnen zijn. Dát is waar wij naar streven. Hieronder alvast ons idee erover.
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
                            en zéker van de cultuursector verwacht om flexibel te zijn en snel te schakelen. Op
                            budgetten werd reeds jaren ervoor beknipt. Meer dan ooit wordt er verwacht om
                            creatief te zijn en het web te omarmen. Waar vroeger de website slechts een afgeleide
                            was van de geprinte communicatie, wordt ondertussen duidelijk dat 2020 heel zeker
                            voor de ommekeer zorgt.
                        </p>
                        <p>
                            Nooit eerder werd er zo berust op digitale communicatie. Wij, hévige fans van het web,
                            marketing automation en social media streven er dan ook naar om deze minstens
                            gelijkwaardig als print te beschouwen.
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
                        <span class="title__offset">2.</span> There is only one first impression
                    </h2>
                </div>
                <div class="text-block__content">
                    <div class="wysiwyg">
                        <p>
                            De branding voor BUDA is de vormelijke weergave van het DNA van het kunstencentrum. Het is
                            zowel trendgevoelig als tijdloos. Branding vraagt een bepaalde neutraliteit zodat deze over
                            alle leeftijden heen kan gesmaakt worden. Op die manier wordt ieders aandacht getrokken.
                            Dat maakt een branding tevens duurzaam.
                        </p>
                        <p>
                            Mooie branding is zowel typografisch als beeldend evenwichtig en leesbaar. Geen zwaar
                            doordachte artistieke concepten waar uitleg bij nodig is om het te begrijpen. Branding
                            moet interpreteerbaar zijn. Pas dan kan je herkenbaarheid creëeren.
                            You only have one shot!
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
                            Een dynamisch kunstencentrum als BUDA vraagt om een dynamische branding. Een goede dynamic
                            brand gaat uit van één of meerdere vaste elementen (logo, kleur, typografie,…) vastgelegd
                            in een styleguide, maar biedt ruimte om de overige elementen variabel in te vullen.
                            Het speelveld bij dynamic branding is ruimer dan bij traditionele branding.
                            De identiteit blijft herkenbaar, mits het respecteren van duidelijke spelregels.
                            Een dynamic brand beweegt mee met de organisatie en met de tijdsgeest. Dit is een must in
                            een continu evoluerende wereld waar zowel online als offline media nooit stilstaan.
                            Een dynamic brand, daar kan je de toekomst mee in.
                        </p>
                        <p>
                            Dynamiek creëeren betekent ook het loslaten van de statische beeldtaal. Branding is meer
                            dan ooit ook letterlijk in beweging. Video, animatie en interactie op platformen als
                            Instagram, het kan vandaag niet meer genegeerd worden. Ook daar biedt een dynamic
                            brand oplossingen voor.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="article__section">
            <div class="text-block">
                <div class="text-block__title">
                    <h2 class="title title--medium">
                        <span class="title__offset">4.</span> Ease of use makes impact
                    </h2>
                </div>
                <div class="text-block__content">
                    <div class="wysiwyg">
                        <p>
                            Functionaliteit staat bij ons op het hoogste schavot én met reden. Denk even aan jezelf
                            en aan jouw surfgedrag. Hoe vluchtig bekijk je een website? Hoe efficiënt wil jij online
                            een ticket kunnen kopen? Juist. Zo snel mogelijk! Duidelijkheid is hier dus de boodschap
                            en daar zijn wij predikers van. En niet alleen online is dit van tel. Een affiche, de
                            maandelijkse kalender of signalisatie, allen dragen ze bij tot hoe de bezoekers het
                            kunstencentrum ervaren.
                        </p>
                        <p>
                            Komt de boodschap over? Dan kan BUDA impact maken.
                        </p>
                        <p>
                            Ook voor jullie als medewerkers achter het computerscherm is functionaliteit een
                            belangrijke pijler. Data centraliseren, dat zorgt ervoor dat content management een
                            klusje van een kwartier wordt. Gedaan met copy-pasten en voortdurend te controleren of
                            data op elk medium exact dezelfde is!
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
