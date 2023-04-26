<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    public function home() {
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
        
        $requestData = $r->only(['email', 'password']);

        if(Auth::attempt($requestData)) {
            return redirect(route('home'));
        }

        return redirect(route('index'));

    }
    public function creating(Request $r) {
        $validatyOfData = $r->validate([
            'name' => 'required|min: 5',
            'email' => 'required|email|min:15',
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




    /* public function index()
    {
        return view('index');
    }
   
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        //
        return redirect()->route('read-all');
    }

    public function show(string $id)
    {
        return view('index', ['users' => []]);
    }

    public function edit(string $id)
    {
        return view('edit');
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('show');
    }

    public function destroy(string $id)
    {
        return redirect()->route('read-all');
    } */
}
