<?php

namespace App\Http\Controllers;
use App\Models\User;

class LikeController extends Controller
{
    public function like()
    {
        $users = User::all();
        return view('like',[
            'users'=>$users,
        ]);
    }
}
