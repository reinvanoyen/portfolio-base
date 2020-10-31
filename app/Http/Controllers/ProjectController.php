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
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book. It has survived not only five
                        centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages, and more recently with desktop publishing software like Aldus PageMaker including
                        versions of Lorem Ipsum.
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
                    'img/superkelly/01.png',
                    'img/superkelly/01.png',
                    'img/superkelly/01.png',
                    'img/superkelly/01.png',
                    'img/superkelly/01.png',
                    'img/superkelly/01.png',
                    'img/superkelly/01.png',
                ],
            ],
            'soundofghent' => [
                'slug' => 'soundofghent',
                'title' => 'Sound of Ghent',
                'body' => '
                    <p>
                        Uitzonderlijke tijden vragen een uitzonderlijke aanpak. Voor vijf Gentse organisaties was dit zeker waar.
                        Dit project ontstond vanuit de drang om ook tijdens een lockdown cultuur aan te kunnen bieden.
                        Handelsbeurs, Festival van Vlaanderen Gent, Democrazy, Miry Concertzaal en Kunstencentrum Vooruit bundelden
                        hun krachten en Sound of Ghent was geboren. Missie: corona-proof concerten tot in de huiskamer brengen en dit met de
                        beste beeld- en geluidskwaliteit.
                    </p>
                    <p>
                        Virtuele concertgangers kopen een ticket via Ticketmatic en ontvangen onmiddellijk een e-mail met
                        daarin hun ticket, deze wordt automatisch aan hun account gelinkt. Dit ticket geeft hen toegang
                        tot de livestream. Daar kunnen ze tijdens het concert een gezellig praatje slaan door
                        middel van een live chat en wie wil kan zelf virtueel mee-applaudisseren.
                        Na afloop van het live concert zijn de opnames nog twee dagen te (her)bekijken.
                    </p>
                    <p>
                        Is dit de ideale manier om cultuur te beleven? Neen, absoluut niet. Maar nood breekt wet.
                        Snel schakelen was dus de opgave. Ondertussen is dit platform uitgegroeit tot lichtpuntje aan
                        het einde van de tunnel.
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
                'body' => '<p>Volta dit, Volta dat.</p>',
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
                'body' => '<p>Music Mania Records lalala</p>',
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
                'thumb' => 'img/dummy-project.png',
                'cover' => 'img/dummy-project.png',
                'images' => [
                    'img/dummy-project.png',
                    'img/dummy-project.png',
                    'img/dummy-project.png',
                    'img/dummy-project.png',
                    'img/dummy-project.png',
                    'img/dummy-project.png',
                    'img/dummy-project.png',
                ],
            ],
            'wonder' => [
                'slug' => 'wonder',
                'title' => 'Wonder',
                'body' => '<p>Wonder</p>',
                'theme' => 'theme-8',
                'url' => 'https://www.wonderkortrijk.be',
                'team' => [
                    'Rein Van Oyen',
                    'i.o.v. Ship of Fools',
                ],
                'tags' => [
                    'Webdesign',
                    'Information architecture',
                    'UX / UI',
                    'Development',
                    'Automation',
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
