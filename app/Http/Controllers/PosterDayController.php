<?php

namespace App\Http\Controllers;

class PosterDayController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function documents()
    {
        return view('admin.posterday.documents_pd');
    }

    public function persyaratan()
    {
        return view('admin.posterday.persyaratan_pd');
    }
}
