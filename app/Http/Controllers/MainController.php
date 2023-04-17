<?php
namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{

    public function main()
    {
        $users = User::all();
        return view('main',[
            'users'=>$users,
        ]);
    }
    public function changeLang(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
}
