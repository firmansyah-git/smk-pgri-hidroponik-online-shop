<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function showRegistrationForm() 
    {
        return view('auth.register');
    }

    public function register(Request $request) 
    {
        logger($request->all());
        $validator = $this->validator($request->all());


        if($validator->fails()){
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $user = $this->create($request->all());
            
        event(new Registered($user));

        auth()->login($user);

        return $this->redirectTo($user);
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:20', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user', // Default role
        ]);
    }

    protected function redirectTo(User $user)
    {
        return match($user->role) {
            'superadmin' => route('superadmin.dashboard'),
            'admin' => route('admin.dashboard'),
            default => route('user.dashboard'),
        };
    }
}
