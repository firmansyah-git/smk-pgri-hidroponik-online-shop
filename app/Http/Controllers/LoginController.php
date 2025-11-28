<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm() 
    {
        return view('auth.login');
    }

     public function login(Request $request)
    {
        $credentials = $this->validateLogin($request);

        if ($this->attemptLogin($credentials, $request->boolean('remember'))) {
            $user = Auth::user();

            return $this->sendLoginResponse($request, $user);
        }

        return $this->sendFailedLoginResponse($request);
    }

    protected function validateLogin(Request $request)
    {
        return $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(array $credentials, bool $remember = false)
    {
        return Auth::attempt([
            'email' => $credentials['email'], 
            'password' => $credentials['password'], 
        ],
            $remember
        );
    }

    protected function sendLoginResponse(Request $request, User $user)
    {
        $request->session()->regenerate();

        // Set session untuk role
        session(['user_role' => $user->role]);

        return redirect()->intended($this->redirectTo($user));
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    protected function redirectTo(User $user)
    {
        return match($user->role) {
            'admin' => route('admin.dashboard'),
            'manager' => route('manager.dashboard'),
            default => route('user.dashboard'),
        };
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
