<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\LoginStoreRequest;
use App\Http\Requests\Login\RegisterStoreRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }
    public function showLogin(){
        return view('auth.login');
    }

    public function register(RegisterStoreRequest $request){

        $data = $request->except('_token','password');
        $data['password'] = bcrypt($request->password);
        if(User::create($data)){
            return view('auth.login');
        }
        return redirect('register')->with('error', 'Oppes! You have entered invalid credentials');

    }
    public function login(LoginStoreRequest $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }
    public function logout() {
        Auth::logout();
  
        return redirect('login');
      }
}
