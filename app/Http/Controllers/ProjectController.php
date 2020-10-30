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
                        Superkelly!
                    </p>
                ',
                'theme' => 'theme-6',
                'tags' => [
                    'Webdesign',
                    'Information architecture',
                    'UX / UI',
                    'Development',
                    'Automation',
                ],
                'url' => null,
                'thumb' => 'img/dummy.jpg',
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
            'volta' => [
                'slug' => 'volta',
                'title' => 'Volta',
                'body' => '<p>Volta dit, Volta dat.</p>',
                'theme' => 'theme-5',
                'url' => 'https://www.volta.brussels',
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
            'soundofghent' => [
                'slug' => 'soundofghent',
                'title' => 'Sound of Ghent',
                'body' => '
                    <p>
                        Blablabla
                    </p>
                ',
                'theme' => 'theme-7',
                'url' => 'https://www.soundofghent.be',
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
            'musicmania' => [
                'slug' => 'musicmania',
                'title' => 'Music Mania Records',
                'body' => '<p>Music Mania Records lalala</p>',
                'theme' => 'theme-3',
                'url' => 'https://www.musicmaniarecords.be',
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
                'theme' => 'theme-7',
                'url' => 'https://www.wonderkortrijk.be',
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
