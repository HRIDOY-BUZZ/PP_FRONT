<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    // STATIC PAGES
    public function about()
    {
        return view('pages.about');
    }
    public function policy()
    {
        return view('pages.policy');
    }
    public function faq()
    {
        return view('pages.faq');
    }
    public function terms()
    {
        return view('pages.terms');
    }
    public function cookies()
    {
        return view('pages.cookies');
    }
    public function desclaimer()
    {
        return view('pages.desclaimer');
    }
}
