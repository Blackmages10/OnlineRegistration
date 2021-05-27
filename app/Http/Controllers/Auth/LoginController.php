<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Request;
use  Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest'])->except('logout');
    }
    public function login(LoginRequest $request)
    {
        $request->validated();
        $email=$request->input('email');
        $password=$request->input('password');
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            if(auth()->user()->is_admin==1){
                return redirect()->route('home.admin');
            }
            else{
                return redirect()->route('home');
            }

        }
        else{

            return redirect()->route('login')->with('invalid','Make sure your credential is correct!');
        }
     }
}
