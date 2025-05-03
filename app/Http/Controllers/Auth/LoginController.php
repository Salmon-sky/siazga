<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function forgot_password(){
        return view('auth.forgot-password');
    }
    
    public function redirectTo()
    {
        switch(auth()->user()->roles_id){
            case 1:
                $this->redirectTo = '/admin/dashboard';
                return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = '/guru/dashboard';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = '/siswa/dashboard';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
