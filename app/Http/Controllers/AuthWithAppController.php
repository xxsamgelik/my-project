<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthWithAppController extends Controller
{
    public function googleRedirect(): \Symfony\Component\HttpFoundation\RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        return Socialite::driver('google')->redirect();

    }
    public function googleCallback(): \Illuminate\Http\RedirectResponse
    {
        $googleUser = Socialite::driver('google')->user();
        $googleUserEmail = $googleUser->getEmail();
        $user = User::query()->where('email', $googleUserEmail)->first();
        if(!$user)
        {
            $user = User::create([
            'email' => $googleUserEmail, 'name' => $googleUser->getName()
        ]);}
        Auth::login($user);
        return redirect()->route('main');
    }

    public function gitRedirect(): \Symfony\Component\HttpFoundation\RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        return Socialite::driver('github')->redirect();
    }
    public function gitCallback(): \Illuminate\Http\RedirectResponse
    {
        $gitUser = Socialite::driver('github')->user();
        $gitUserEmail = $gitUser->getEmail();
        $user = User::query()->where('email', $gitUserEmail)->first();
        if(!$user)
        {
            $user = User::create([
                'email' => $gitUserEmail, 'name' => $gitUser->getName()
            ]);}
        Auth::login($user);
        return redirect()->route('main');
    }

}
