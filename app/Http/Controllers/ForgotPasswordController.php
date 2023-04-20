<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Testing\Fluent\Concerns\Has;

class ForgotPasswordController extends Controller
{
    public function forgotPasswordView()
    {
        return view('forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email'=>'required|email']);
        $status = Password::sendResetLink($request->only('email'));
        return $status ===Password::RESET_LINK_SENT
            ?back() ->with(['success'=>__($status)])
            :back()->with(['fail'=>__($status)]);
    }
    public function resetPasswordView(string $token)
    {
        return view('reset-password', [
            'token' => $token
        ]);
    }
    public  function resetPassword(Request $request)
    {
        $request->validate([
            'token'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email','password','password_confirmation','token'),
            function ($user,$password)
            {
                $user->forceFill([
                    'password'=>Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));
            }
        );
        return $status===Password::PASSWORD_RESET
            ?redirect()->route('main')->with('success',__($status))
            :back()->with(['fail'=>[__($status)]]);
    }

}
