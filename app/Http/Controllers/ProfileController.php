<?php

namespace App\Http\Controllers;
use App\Helpers\Country;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{

    public function profile()
    {
        $geos = Country::getAllGeos();

        return view('profile', [
            'user' => Auth::user(),
            'geos' => $geos,
        ]);
    }
    public function changeProfile(Request $request)
    {
        $user = Auth::user();
        $data = [
            'sex'=>$request->input('gender'),
            'date_birthday'=>$request->input('dateofbirth'),
            'status'=>$request->input('status'),
            'country'=>$request->input('country'),
        ];
        if (!$user->information) {
            $userInformation = new UserInformation($data);
            $user->information()->save($userInformation);
        } else {
            $user->information()->update($data);
        }
        return view('profile');
    }

}
