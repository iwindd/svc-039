<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("welcome");
    }

    public function executives()
    {
        return view("welcome");
    }

    public function teachers()
    {
        return view("welcome");
    }

    public function students()
    {
        return view("welcome");
    }

    public function majors()
    {
        return view("welcome");
    }
}
