<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // Landing page (/)
    public function index()
    {
        return view('home', ['title' => 'Home']);
    }

    // About page (/about)
    public function about()
    {
        return view('about', ['title' => 'About']);
    }
}
