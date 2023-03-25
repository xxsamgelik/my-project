<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function login(Request $request)
    {
        $validate = $request->validate(
            [
                'email'=>'required'

            ]
        );
        return back()->withErrors(
            [
                'error'=>'Error'
            ]
        );
        dd($validate);

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
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
    public function register(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        $email = $request->input('email');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
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
