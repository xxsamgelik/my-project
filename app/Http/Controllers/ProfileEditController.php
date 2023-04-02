<?php

namespace App\Http\Controllers;
use App\Models\UserInformation;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

class ProfileEditController extends Controller
{
    public function profileEdit()
    {
        $profile = Auth::user();
        return view("profile-edit", ['profile' => $profile]);
    }
}
