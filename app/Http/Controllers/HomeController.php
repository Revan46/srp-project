<?php

namespace App\Http\Controllers;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $mahasiswa = User::all()->where('level', 'mahasiswa')->count();
        $dosen = User::all()->where('level', 'dosen')->count();
        return view('dashboard', compact('mahasiswa', 'dosen'));
    }
}
