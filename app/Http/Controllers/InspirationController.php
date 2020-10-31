<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspirationController extends Controller
{
    private function getInspiration()
    {
        return [
            [
                'author' => 'Studio Dunbar',
                'title' => 'Demo Festival',
                'cover' => 'img/inspiration/1/demo-1.png',
                'url' => 'https://studiodumbar.com/work/demo',
            ],
            [
                'author' => 'Pentagram',
                'title' => 'Iba ’27',
                'cover' => 'img/inspiration/2/iba-1.png',
                'url' => 'https://www.pentagram.com',
            ],
            [
                'author' => 'North Design',
                'title' => 'ACMI',
                'cover' => 'img/inspiration/3/acmi-1.png',
                'url' => 'https://www.northdesign.co.uk',
            ],
            [
                'author' => 'Milie J Tyler',
                'title' => 'AIR UK',
                'cover' => 'img/inspiration/4/air-1.png',
                'url' => 'https://milliejtyler.com',
            ],
            [
                'author' => 'Bravoure',
                'title' => 'Paradiso',
                'cover' => 'img/inspiration/5/para-1.png',
                'url' => 'https://www.paradiso.nl',
            ],
            [
                'author' => 'Christopher Doyle',
                'title' => 'Steep',
                'cover' => 'img/inspiration/6/steep-1.png',
                'url' => 'https://christopherdoyle.co',
            ],
            [
                'author' => 'Pentagram',
                'title' => 'Opera Ballet Vlaanderen',
                'cover' => 'img/inspiration/7/obv-1.png',
                'url' => 'https://www.pentagram.com',
            ],
            [
                'author' => 'Werklig',
                'title' => 'MALL VOICE',
                'cover' => 'img/inspiration/8/mv-1.png',
                'url' => 'https://www.werklig.com',
            ],
            [
                'author' => 'Base Design',
                'title' => 'Modemuseum Antwerpen',
                'cover' => 'img/inspiration/9/momu-1.png',
                'url' => 'https://www.basedesign.com',
            ],
            [
                'author' => 'Snohetta',
                'title' => 'Moniker',
                'cover' => 'img/inspiration/10/moniker-1.png',
                'url' => 'https://www.snohetta.com',
            ],
            [
                'author' => 'Basics09',
                'title' => 'Junge Akademie',
                'cover' => 'img/inspiration/11/junge-1.png',
                'url' => 'https://junge-akademie.adk.de',
            ],
            [
                'author' => 'Callin Mackintosh',
                'title' => 'Sundance Filmfestival 2020',
                'cover' => 'img/inspiration/12/sun-1.png',
                'url' => 'https://www.callinmackintosh.com',
            ],
        ];
    }

    public function index()
    {
        return view('inspiration.index', [
            'inspiration' => $this->getInspiration(),
        ]);
    }
}
