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
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                        PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.
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
                'cover' => 'img/dummy-project.png',
                'images' => [
                    'img/dummy-project.png',
                    'img/dummy-project.png',
                    'img/dummy-project.png',
                    'img/dummy-project.png',
                    'img/dummy-project.png',
                    'img/dummy-project.png',
                ],
            ],
            'volta' => [
                'slug' => 'volta',
                'title' => 'Volta',
                'body' => '<p>Ok....</p>',
                'theme' => 'theme-5',
                'url' => 'https://www.volta.brussels',
                'tags' => [
                    'Webdesign',
                    'Information architecture',
                    'UX / UI',
                    'Development',
                    'Automation',
                ],
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
                'body' => '<p>Ok....</p>',
                'theme' => 'theme-7',
                'url' => 'https://www.soundofghent.be',
                'tags' => [
                    'Webdesign',
                    'Information architecture',
                    'UX / UI',
                    'Development',
                    'Automation',
                ],
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
