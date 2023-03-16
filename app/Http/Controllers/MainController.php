<?php
namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Users;
use Illuminate\Routing\Controller;

class MainController extends Controller
{

    public function main()
    {
        $users = Users::all();
        return view('main',[
            'users'=>$users,
        ]);
    }
}
