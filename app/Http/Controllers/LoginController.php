<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function getLoginPage()
    {
        return view('login');
    }

    public function getRegisterPage()
    {
        return view('register');
    }
    public function login(LoginRequest $request)
    {
        $validate = $request->validated();
        $credentials = [
            'email' => $validate['email'],
            'password' => $validate['password']
        ];

        $isRemember = $request->input('remember') == 'on';

        if (Auth::attempt($credentials, $isRemember)) {
            $request->session()->regenerate();

            return redirect()->route('main');
        }

        return back()->withErrors([
            'error' => 'Error'
        ]);

    }
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        Auth::login($user);

        return redirect()->route('main');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('main');
    }
}
