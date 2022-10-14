<?php

namespace App\Http\Controllers;

class SkripsiController extends Controller
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
        return view('admin.skripsi.documents_sta');
    }

    public function persyaratan()
    {
        return view('admin.skripsi.persyaratan_sta');
    }
}
