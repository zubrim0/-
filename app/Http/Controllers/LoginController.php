<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'error' => [trans('auth.failed')],
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('welcome')->with('success', 'Ви успішно ввійшли!');
        }

        return redirect()->back()->withErrors(['помилка' => 'Невірний email або пароль']);
    }

public function logout(Request $request)
{
    if (auth()->check()) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/welcome')->with('success', 'Ви успішно вийшли!');
    } else {
        return redirect('/welcome')->withErrors(['помилка' => 'Ви не ввійшли в аккаунт.']);
    }
}


}
