<?php

namespace App\Http\Controllers;
use App\Helpers\Country;
use App\Models\UserInformation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileEditController extends Controller
{
    public function profileEdit()
    {
        $profile = Auth::user();
        $geos = Country::getAllGeos();
        return view("profile-edit", ['profile' => $profile]);
    }
}
