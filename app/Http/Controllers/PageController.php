<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function manifesto()
    {
        return view('pages.manifesto');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function inspiration()
    {
        return view('pages.inspiration');
    }

    public function experiment()
    {
        return view('pages.experiment');
    }
}
