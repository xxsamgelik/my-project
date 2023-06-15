<?php

namespace App\Http\Controllers;
use App\Models\User;

class LikeController extends Controller
{
    public function like()
    {
//        $users = User::all();
        $users = User::query()->orderBy('created_at')->simplePaginate(5);
        return view('like', ['users' => $users]);
    }
}
