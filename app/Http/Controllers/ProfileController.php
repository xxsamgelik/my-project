<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }
}
