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
        return view("pages.executives");
    }

    public function teachers()
    {
        return view("pages.teachers");
    }

    public function students()
    {
        return view("pages.students");
    }

    public function majors()
    {
        return view("pages.majors");
    }
}
