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
                'body' => '<p>Ok....</p>',
                'theme' => 'theme-6',
                'url' => 'https://www.democrazy.be',
                'tags' => [
                    'Webdesign',
                    'Information architecture',
                    'UX / UI',
                    'Development',
                    'Automation',
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
