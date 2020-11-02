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
                        We ontwierpen een robuuste, tikkeltje punky online identiteit en zorgden ervoor dat de website
                        zich diep kon wortelen in de werking van Democrazy. Vanuit de website vertrekt wekelijks de
                        nieuwsbrief, en dit volledig geautomatiseerd met ge-update data uit het cms-systeem.
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
                        Een brunch-, lunch- en apérobar die eruit springt, dat was het uitgangspunt voor de
                        creatieve strategie van SUPERKELLY.
                    </p>
                    <p>
                        Van naam tot signalisatie tot website, alles werd uitgekiend en dit met een beperkt budget
                        en met oog voor ecologie. Startend vanaf januari 2021 wordt SUPERKELLY dé bar aan de Brugse
                        Poort waar je niet enkel op de koffie komt, maar waar je je echt deel voelt van de SUPERKELLY
                        family.
                    </p>
                    <p>
                        Het waarom? Het is bold, brave en met een snuifje humor. What’s not to like?
                    </p>
                ',
                'theme' => 'theme-10',
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
                        Uitzonderlijke tijden vragen een uitzonderlijke aanpak. Dit project ontstond vanuit de drang om,
                        ook tijdens een lockdown, cultuur te kunnen aanbieden. Handelsbeurs, Festival van Vlaanderen,
                        Democrazy, Miry Concertzaal en Kunstencentrum Vooruit bundelden hun krachten en Sound of Ghent
                        was geboren. Missie: corona-proof concerten tot in de huiskamer brengen en dit met de beste beeld- en geluidskwaliteit.
                    </p>
                    <p>
                        Virtuele concertgangers kopen een ticket via Ticketmatic en ontvangen onmiddellijk een e-mail
                        met daarin hun ticket, deze wordt automatisch aan hun account gelinkt. Tijdens de livestream
                        kunnen ze een gezellig praatje slaan door middel van een live chat en wie wil kan zelfs
                        virtueel mee-applaudisseren. Na afloop van het live concert zijn de opnames nog
                        twee dagen te (her)bekijken.
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
                    'img/soundofghent/02.png',
                    'img/soundofghent/04.png',
                ],
            ],
            'volta' => [
                'slug' => 'volta',
                'title' => 'Volta',
                'body' => '
                    <p>
                        Volta is een jong en alternatief muziekcentrum in Brussel. Het biedt een podium aan opkomende
                        artiesten. De stijl die we ontwierpen reflecteert het rebels kantje van Volta. Deze stijl trokken
                        we volledig door in de online communicatie. Van website tot sociale media. Het online platform
                        biedt ruimte voor de vele creatieve uitspattingen van deze organisatie.
                    </p>
                    <p>
                        Van online concertagenda tot het boeken van workshops en repetitieruimtes, alles wordt
                        overzichtelijk weergegeven in de website. Dit zorgt ervoor dat jongeren sneller de weg
                        vinden naar Volta.
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
                    'img/volta/04.png',
                    'img/volta/03.png',
                    'img/volta/02.png',
                    'img/volta/05.png',
                    'img/volta/06.png',
                ],
            ],
            'veronique-sneyaert' => [
                'slug' => 'veronique-sneyaert',
                'title' => 'Veronique Sneyaert',
                'body' => '
                    <p>
                        “Met elk juweel dat ik ontwerp, vertel ik een uniek verhaal. Ontroerende verhalen over
                        liefde en vriendschap, maar ook over de kleine dingen in het leven.” De Hasseltse
                        ontwerpster Veronique Sneyaert creëert unieke gepersonaliseerde juwelen.
                    </p>
                    <p>
                        Na de explosie aan bestellingen die de website in 2018 teweegbracht besloten we om het
                        bestelproces op haar website nog gebruiksvriendelijker te maken aan de hand van een
                        configurator om juwelen te personaliseren. Het resultaat is een duidelijk en overzichtelijk
                        systeem waarmee een juweel kan worden ontworpen naar eigen believen.
                    </p>
                    <p>
                        Deze website kreeg een nominatie op de "CSS Design Awards" en ontving de
                        “Special Kudos Award” en de “Best User Interface Design Award”.
                    </p>
                ',
                'theme' => 'theme-4',
                'url' => 'https://mijn.veroniquesneyaert.be/configurator/',
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
                'thumb' => 'img/veroniquesneyaert/01.png',
                'cover' => 'img/veroniquesneyaert/01.png',
                'images' => [
                    'img/veroniquesneyaert/02.png',
                    'img/veroniquesneyaert/04.png',
                    'img/veroniquesneyaert/03.png',
                    'img/veroniquesneyaert/05.jpg',
                    'img/veroniquesneyaert/06.png',
                    'img/veroniquesneyaert/07.png',
                    'img/veroniquesneyaert/08.png',
                    'img/veroniquesneyaert/09.jpg',
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
            'musicmania' => [
                'slug' => 'musicmania',
                'title' => 'Music Mania',
                'body' => '
                    <p>
                        Music Mania, opgericht in 1969, is de meest legendarische en alternatieve platenzaak in België.
                    </p>
                    <p>
                        Een custom made webshop dat de tactiliteit van de echte recordshop nog in zich draagt. Dit
                        was ons doel tijdens het creëeren van het e-commerce platform voor Music Mania. The wall,
                        het draaien van de platenhoezen en de labels op de platen, allen dragen ze bij tot het gevoel
                        dat je hebt wanneer je shopt bij Music Mania.
                    </p>
                    <p>
                        De website, nieuwsbrief en het on-site POS-systeem worden allemaal gestuurd vanuit één centraal systeem.
                        Niets handiger om het overzicht in de stock te bewaren. Een echte timesaver voor de
                        dagelijkse werking bij Music Mania. Vraag het maar aan Adriaan.
                    </p>',
                'theme' => 'theme-11',
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
                    'img/musicmania/06.png',
                    'img/musicmania/07.png',
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
