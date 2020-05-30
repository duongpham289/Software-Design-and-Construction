<?php

namespace App\Http\Controllers\Client;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function showLoginForm(){
        return view('client.auth.login');
    }

     protected function guard()
    {
        return Auth::guard('client');

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }


}
