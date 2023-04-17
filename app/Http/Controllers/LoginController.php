<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Mail\TestMail;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;
use Jenssegers\Agent\Facades\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{

    public function getLoginPage()
    {
        return view('login');
    }

    public function getRegisterPage()
    {
        $user = User::query()->find(1);
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
        $browser = Agent::browser();
        $platform = Agent::platform();
        $validated = $request->validated();
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);
        Mail::to($validated['email'])->send(new TestMail($user));
        event(new Registered($user));
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
