<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    public function home(Request $r) {
        return view('home');
    }
    public function login() {
        if(Auth::check()) {
            return redirect()->route('home');
        }
        return view('login');
    }
    public function register() {
        if(Auth::check()) {
            return redirect()->route('home');
        }
        return view('register');
    }
    public function logando(Request $r) {
        $r->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        /* 
        'email' => 'required|email|min:15|unique:users,email', */
        
        $requestData = $r->only(['email', 'password']);

        if(Auth::attempt($requestData)) {
            return redirect(route('home'));
        }

        return redirect()->back()->withErrors([
            'login-erro' => 'email e ou senha inválidos'
        ]);
        //neste caso, eu sou redirecionado para a última pagina, e na sessão atual será gerado um erro, que poderá ser utilizado conforme está na view, mas somente nesta sessão.

    }
    public function creating(Request $r) {
        $validatyOfData = $r->validate([
            'name' => 'required|min: 5',
            'email' => 'required|email|min:15|unique:users,email',/*lembrando que eu poderia fazer assim quando um if e esse e: back()->withErrors([
                'login-erro' => 'email e ou senha inválidos'
            ]); teria um erro na view e na mesma sessão da mesma forma. */
            'password' => 'required|min:6|confirmed'
        ]);
        $data = $r->only(['email','password', 'name']);
        $data['password'] = Hash::make($data['password']);

        User::create($data);
        return redirect(route('index'));
    }
    public function logout() {
        if(Auth::check()) {
            Auth::logout();
        }
        return redirect(route('index'));
    }

}
