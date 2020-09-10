<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        return Validator::make($data, [

            'username' => ['required', 'string' , 'max:255', 'unique:offices'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'name' => ['required', 'string', 'max:255'],
            'OF_lname' => ['required', 'string',],
            'OF_lname' => ['required', 'string', 'max:255' ],
            'OF_rank' => ['required', 'string', 'max:255' ],
            'OF_department' => ['required', 'string', 'max:255' ],
            'OF_institution' => ['required', 'string'],
            'OF_tel' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:offices'],
            'OF_status' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'name' => $data['name'],
            'OF_lname' => $data['OF_lname'],
            'OF_rank' => $data['OF_rank'],
            'OF_department' => $data['OF_department'],
            'OF_institution' => $data['OF_institution'],
            'OF_tel' => $data['OF_tel'],
            'email' => $data['email'],
            'OF_status' => $data['OF_status'],
        ]);
    }
}




// protected function validator(array $data)
// {
//     return Validator::make($data, [
//         
//         'OF_pass' => ['required', 'string', 'min:8','confirmed'],
//         'OF_name' => ['required', 'string' , 'max:255'],
//         'OF_lname' => ['required', 'string', 'max:255' ],
//         'OF_rank' => ['required', 'string', 'max:255' ],
//         'OF_department' => ['required', 'string', 'max:255' ],
//         'OF_institution' => ['required', 'string'],
//         'OF_tel' => ['required', 'string', 'max:255'],
//         'OF_email' => ['required', 'string', 'email', 'max:255', 'unique:offices'],
//         'OF_status' => ['required', 'string', 'max:255'],

//     ]);
// }

// /**
//  * Create a new user instance after a valid registration.
//  *
//  * @param  array  $data
//  * @return \App\User
//  */
// protected function create(array $data)
// {
//     return User::create([
//         'OF_user' => $data['OF_user'],
//         'OF_pass' => Hash::make($data['OF_pass']),
//         'OF_name' => $data['OF_name'],
//         'OF_lname' => $data['OF_lname'],
//         'OF_rank' => $data['OF_rank'],
//         'OF_department' => $data['OF_department'],
//         'OF_institution' => $data['OF_institution'],
//         'OF_tel' => $data['OF_tel'],
//         'OF_email' => $data['OF_email'],
//         'OF_status' => $data['OF_status'],
//     ]);
// }
