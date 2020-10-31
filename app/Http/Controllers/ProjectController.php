<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private function getProjects()
    {
        return [
            'democrazy' => [
                'slug' => 'democrazy',
                'title' => 'Democrazy',
                'body' => '
                    <p>
                        Met gemiddeld 150 concerten per jaar is Democrazy de grootste concertorganisator in het Gentse.
                        De voortdurende updates van die concerten met de bezoekers communiceren, vraagt om een sterk
                        communicatieplan. De website speelt hier bij Democrazy een essentiële rol in.
                    </p>
                    <p>
                        We zorgden voor een robuuste online identiteit en zorgden ervoor dat deze zich diep kon
                        wortelen in de werking van Democrazy. Vanuit de website vertrekt wekelijks een automatische
                        nieuwsbrief, in het gekende Democrazy jasje en met data die steeds up-to-date is.
                    </p>
                ',
                'theme' => 'theme-6',
                'url' => 'https://www.democrazy.be',
                'team' => [
                    'Maïté Maekelberg',
                    'Rein Van Oyen',
                    'i.o.v. Tallieu & Tallieu',
                ],
                'tags' => [
                    'Webdesign',
                    'Information architecture',
                    'UX / UI',
                    'Development',
                    'Automation',
                ],
                'thumb' => 'img/democrazy/01.png',
                'cover' => 'img/democrazy/01.png',
                'images' => [
                    'img/democrazy/02.png',
                    'img/democrazy/03.png',
                    'img/democrazy/04.png',
                    'img/democrazy/05.png',
                    'img/democrazy/06.png',
                    'img/democrazy/07.png',
                    'img/democrazy/08.png',
                    'img/democrazy/09.png',
                ],
            ],
            'superkelly' => [
                'slug' => 'superkelly',
                'title' => 'Superkelly',
                'body' => '
                    <p>
                        Een brunch-, lunch- en apérobar die er uitspringt, dat was het uitgangspunt van
                        creatieve strategie voor SUPERKELLY. Van naam tot signalisatie tot website, alles werd
                        uitgekiend en dit met een beperkt budget en met oog voor ecologie. Startend vanaf
                        januari 2021 wordt SUPERKELLY de bar aan de Brugse Poort waar je niet enkel op de
                        koffie komt, maar waar je je echt deel voelt van de SUPERKELLY family. Het waarom?
                        Het is bold, brave en met een snuifje humor. What’s not to like?
                    </p>
                ',
                'theme' => 'theme-6',
                'team' => [
                    'Maïté Maekelberg',
                    'Rein Van Oyen',
                ],
                'tags' => [
                    'Art direction',
                    'Branding',
                    'Strategy',
                ],
                'url' => null,
                'thumb' => 'img/superkelly/01.png',
                'cover' => 'img/superkelly/01.png',
                'images' => [
                    'img/superkelly/02.png',
                    'img/superkelly/03.jpg',
                    'img/superkelly/04.jpg',
                    'img/superkelly/05.jpg',
                    'img/superkelly/06.jpg',
                ],
            ],
            'soundofghent' => [
                'slug' => 'soundofghent',
                'title' => 'Sound of Ghent',
                'body' => '
                    <p>
                        Uitzonderlijke tijden vragen een uitzonderlijke aanpak. Dit project ontstond vanuit de
                        drang om ook tijdens een lockdown cultuur aan te kunnen bieden. Handelsbeurs, Festival van
                        Vlaanderen Gent, Democrazy, Miry Concertzaal en Kunstencentrum Vooruit bundelden hun krachten
                        en Sound of Ghent was geboren. Missie: corona-proof concerten tot in de huiskamer brengen en
                        dit met de beste beeld- en geluidskwaliteit.
                    </p>
                    <p>
                        Virtuele concertgangers kopen een ticket via Ticketmatic en ontvangen onmiddellijk een e-mail
                        met daarin hun ticket, deze wordt automatisch aan hun account gelinkt. Dit ticket geeft hen
                        toegang tot de livestream. Daar kunnen ze tijdens het concert een gezellig praatje slaan
                        door middel van een live chat en wie wil kan zelf virtueel mee-applaudisseren. Na
                        afloop van het live concert zijn de opnames nog twee dagen te (her)bekijken.
                    </p>
                ',
                'theme' => 'theme-9',
                'url' => 'https://www.soundofghent.be',
                'team' => [
                    'Rein Van Oyen',
                    'i.o.v. Ship of Fools'
                ],
                'tags' => [
                    'Frontend development',
                    'Backend development',
                    'Automation',
                    'Consultancy',
                ],
                'thumb' => 'img/soundofghent/05.png',
                'cover' => 'img/soundofghent/03.png',
                'images' => [
                    'img/soundofghent/01.png',
                    'img/soundofghent/05.png',
                    'img/soundofghent/06.png',
                    'img/soundofghent/02.png',
                    'img/soundofghent/04.png',
                ],
            ],
            'volta' => [
                'slug' => 'volta',
                'title' => 'Volta',
                'body' => '
                    <p>
                        Het alternatieve, in Brussel gebaseerde muziekcentrum Volta, biedt een meer dan een
                        podium voor jonge artiesten. Concerten, workshops en repetitieruimtes boeken, het
                        kan allemaal op de website van Volta.
                    </p>
                ',
                'theme' => 'theme-5',
                'url' => 'https://www.volta.brussels',
                'team' => [
                    'Maïté Maekelberg',
                    'Rein Van Oyen',
                    'i.o.v. Tallieu & Tallieu',
                ],
                'tags' => [
                    'Webdesign',
                    'Information architecture',
                    'UX / UI',
                    'Development',
                    'Automation',
                ],
                'thumb' => 'img/volta/01.png',
                'cover' => 'img/volta/01.png',
                'images' => [
                    'img/volta/01.png',
                    'img/volta/01.png',
                    'img/volta/01.png',
                    'img/volta/01.png',
                    'img/volta/01.png',
                    'img/volta/01.png',
                    'img/volta/01.png',
                ],
            ],
            'musicmania' => [
                'slug' => 'musicmania',
                'title' => 'Music Mania Records',
                'body' => '
                    <p>
                        Opgericht in 1969 is Music Mania dé meest legendarische en alternatieve platenzaak in België.
                    </p>
                    <p>
                        Een custom made webshop dat de tactiliteit van de echte recordshop nog in zich draagt. Dit
                        was ons doel tijdens het creëeren van het e-commerce platform voor Music Mania. The wall,
                        het draaien van de platenhoezen en de labels op de platen, allen dragen ze bij tot een minder
                        droge ervaring van het online shoppen naar platen.
                    </p>
                    <p>
                        De website, emailing en POS-systeem worden allemaal gestuurd vanuit één centraal systeem.
                        Niets handiger om het overzicht in de stock te bewaren.
                    </p>',
                'theme' => 'theme-3',
                'url' => 'https://www.musicmaniarecords.be',
                'team' => [
                    'Maïté Maekelberg',
                    'Rein Van Oyen',
                    'i.o.v. Tallieu & Tallieu',
                ],
                'tags' => [
                    'Webdesign',
                    'Information architecture',
                    'UX / UI',
                    'Development',
                    'Automation',
                ],
                'thumb' => 'img/musicmania/01.png',
                'cover' => 'img/musicmania/01.png',
                'images' => [
                    'img/musicmania/02.png',
                    'img/musicmania/03.png',
                    'img/musicmania/04.png',
                    'img/musicmania/05.png',
                ],
            ],
            'wonder' => [
                'slug' => 'wonder',
                'title' => 'Wonder',
                'body' => '
                    <p>
                        Creatief Kortrijk slaat terug met het gloednieuwe stadsfestival WONDER. Een verrassende
                        reis langs creativiteit, design en muziek voor jong en oud.
                    </p>
                    <p>
                        Hou je smartphone in de hand en op de interactieve kaart zie je waar je je bevindt in Kortrijk. Zo kan je van locatie naar
                        locatie wandelen en bruisend Kortrijk ontdekken. De unieke indeling van de website werd speciaal zo ontworpen zodat
                        deze zich goed vertaald naar het mobiele web.
                    </p>
                    <p>
                        Helaas, zelfs een verwonderlijk goede website heeft geen vat op corona.
                        Vanaf 28 oktober 2020 werd ook dit festival afgelast.
                    </p>
                ',
                'theme' => 'theme-8',
                'url' => 'https://www.wonderkortrijk.be',
                'team' => [
                    'Rein Van Oyen',
                    'i.o.v. Ship of Fools',
                ],
                'tags' => [
                    'Frontend development',
                    'Backend development',
                ],
                'thumb' => 'img/wonder/01.png',
                'cover' => 'img/wonder/01.png',
                'images' => [
                    'img/wonder/02.png',
                    'img/wonder/03.png',
                ],
            ],
        ];
    }

    public function index()
    {
        return view('projects.index', [
            'projects' => $this->getProjects(),
        ]);
    }

    public function view(string $projectSlug)
    {
        $projects = $this->getProjects();
        $projectKeys = array_keys($projects);

        $currProjectIndex = array_search($projectSlug, $projectKeys);
        $nextProjectIndex = $currProjectIndex + 1;
        $prevProjectIndex = $currProjectIndex - 1;

        $nextProject = null;
        if (isset($projectKeys[$nextProjectIndex])) {
            $nextProject = $projects[$projectKeys[$nextProjectIndex]] ?? null;
        }

        $prevProject = null;
        if (isset($projectKeys[$prevProjectIndex])) {
            $prevProject = $projects[$projectKeys[$prevProjectIndex]] ?? null;
        }

        if (! isset($projects[$projectSlug])) {
            abort(404);
        }

        $project = $projects[$projectSlug];

        return view('projects.view', [
            'project' => $project,
            'prevProject' => $prevProject,
            'nextProject' => $nextProject,
        ]);
    }
}
