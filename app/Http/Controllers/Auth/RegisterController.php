<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request_registration;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // return Validator::make($data, [
        //     'first_name'=>'required|max:15',
        //     'last_name'=>'required|max:15',
        //     'phone_number'=>'required|numeric|regex:/(09)(\d){9}/|digits:11',
        //     'job_title'=>'required|max:15',
        //     'job_role'=>'required',
        //     'company_name'=>'required|max:30',
        //     'industry'=>'required',
        //     'company_type'=>'required',
        //     'terms' => 'required',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);
        $rules=array(
            'first_name'=>'required|max:15',
            'last_name'=>'required|max:15',
            'phone_number'=>'required|numeric|regex:/(09)(\d){9}/|digits:11',
            // 'job_title'=>'required|max:15',
            'job_role'=>'required',
            'industry'=>'required',
            'company_type'=>'required',
            'company_name'=>'required_unless:job_role,4|max:15',
            'terms' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        );

        $messsages=array(
            'first_name.required'=>'*Firstname is required',
            'first_name.max'=>'*Maximum lenght is 15',
            'last_name.required'=>'*Lastname is required',
            'last_name.max'=>'*Maximum lenght is 15',
            'phone_number.required'=>'*Phone number is required',
            'phone_number.numeric'=>'*Example format: 09100719502',
            'phone_number.digits'=>'*Example format: 09100719502',
            'phone_number.regex'=>'*Example format: 09100719502',
            // 'job_title.required'=>'*Job Title is required',
            // 'job_title.max'=>'*Maximum lenght is 15',
            'job_role.required'=>'*Please select',
            'company_name.required_unless'=>'*Company name is required',
            'company_name.max'=>'*Maximum lenght is  15',
            'industry.required'=>'*Please select ',
            'company_type.required'=>'*Please select',
            'terms.required'=>'*The term and condition is required',
            'password.required'=>'Password is required',
            'email.required'=>'Email is required'
        );

        $validator = Validator::make($data, $rules,$messsages);
        return $validator;
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        return User::create([
            'first_name'=>$data['first_name'],
            'last_name'=>$data['last_name'],
            'phone_number'=>$data['phone_number'],
            // 'job_title'=>$data['job_title'],
            'job_role'=>$data['job_role'],
            'company_name'=>$data['company_name'],
            'industry'=>$data['industry'],
            'company_type'=>$data['company_type'],
            'terms' => $data['terms'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
