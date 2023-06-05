<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class   AboutController extends Controller
{
    public function about()
    {
        return view('about',[
            'user' => DB::table('users')->count(),
            'userMale'=>DB::table('user_information')->where('sex', 'Male')->count(),
            'userFemale'=>DB::table('user_information')->where('sex', 'Female')->count()
        ]);
    }
}
