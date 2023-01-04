<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    // public function index(User $model)
    // {
    //     return view('users.index', ['users' => $model->paginate(15)]);
    // }
    public function index()
    {
        $user = User::all();
        return view('users', compact('user'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'npm_nip' => 'required',
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'tipe_user' => 'required',
        ]);

        $user = new User;
        $user->npm_nip = $request->input('npm_nip');
        $user->nama = $request->input('nama');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->tipe_user = $request->input('tipe_user');
        $user->save();

        return redirect('/users')->with('sukses','Data berhasil diinput');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users')->with('sukses','Data berhasil dihapus');
    }
}
