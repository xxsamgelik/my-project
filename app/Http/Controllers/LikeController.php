<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Routing\Controller;

class LikeController extends Controller
{
    public function like()
    {
        $users = Users::all();
        return view('like',[
            'users'=>$users,
        ]);
    }
}
