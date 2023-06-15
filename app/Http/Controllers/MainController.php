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
    public function search(Request $request)
    {
        $query = $request->input('query');
        $status = $request->input('status');

        $users = User::query();

        if (!empty($status)) {
            $users->where('status', $status);
        }

        if (!empty($query)) {
            $users->where('name', 'LIKE', "%{$query}%");
        }

        $users = $users->paginate(5);

        return view('like', [
            'users' => $users,
        ]);
    }

    public function likedUsers()
    {
        $likedUsers = auth()->user()->likes()->paginate(5);

        return view('liked-users', ['likedUsers' => $likedUsers]);
    }










}
