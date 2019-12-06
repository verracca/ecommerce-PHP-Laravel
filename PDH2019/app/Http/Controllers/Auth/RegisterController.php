<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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
        return Validator::make(
            $data,
            [
                'firstName' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ],
            [
                'firstName.required' => 'Por favor ingrese su nombre',
                'firstName.string' => 'El nombre debe ser una cadena de texto.',
                'firstName.max' => 'Se ha excedido el maximo de caracteres permitidos',
                'lastName.required' => 'Por favor ingrese su apellido',
                'lastName.string' => 'El apellido debe ser una cadena de texto.',
                'lastName.max' => 'Se ha excedido el maximo de caracteres permitidos',
                'email.required' => 'Por favor ingrese su e-mail.',
                'email.string' => 'El email debe ser una cadena de texto.',
                'email.email' => 'Por favor ingrese un e-mail valido.',
                'email.max' => 'Se ha excedido el maximo de caracteres permitidos',
                'email.unique' => 'El e-mail ya se encuentra registrado',
                'password.required' => 'Por favor ingrese una contraseña.',
                'password.string' => 'La contraseña debe ser una cadena de texto.',
                'password.min' => 'La contraseña debe tener un minimo de 8 caracteres.',
                'password.confirmed' => 'Las contraseñas no coinciden.'
            ]
        );
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
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
