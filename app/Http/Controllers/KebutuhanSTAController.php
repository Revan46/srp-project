<?php

namespace App\Http\Controllers;

class KebutuhanSTAController extends Controller
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
    public function validasi()
    {
        return view('admin.kebutuhan_sta.validasi');
    }

    public function syarat()
    {
        return view('admin.kebutuhan_sta.syarat');
    }
}
