<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompteController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function login(){
        return view('pages.connexion.login');
    }

    public function register(){
        return view('pages.connexion.register');
    }

    public function create(Request $request){
        User::create([
            'name'=>$request->input("nom"),
            'email'=>$request->input("email"),
            'password'=>Hash::make($request->input("pass")),
            // 'password'=>$request->input("pass"),
        ]);

        session()->flash('success','Compte crée avec succès');

        return redirect('/register');
    }

    public function connect(Request $request){
        if (Auth::attempt(['email' => $request->input("email"),
                        'password' => $request->input("pass")])) {
            return redirect('/home');
        }else {
            session()->flash('error','Identifiant Incorrect');

            return redirect('/');
        }
    }

    public function home(){
        return view('pages.compte.home');
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}
