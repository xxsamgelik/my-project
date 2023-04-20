<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;
use function Symfony\Component\Translation\t;

class FavoriteController extends Controller
{
    public function addPeople(User $people)
    {
        $user = session()->get('people',[]);
        if(isset($user[$user->id]))
        {
            $currentQuantity = $user[$people->id]['quantity'];
            $user[$people->id]=[
              'quantity'=>$currentQuantity+1,
              'added_at'=>time()
            ];
        }
        else
        {
            $user[$people->id]=[
                'quantity'=>1,
                'added_at'=>time()
            ];
        }
        session()->put('people',$user);
    }
    public function removePeople(User $people)
    {
        $user = session()->get('people');
        if(isset($user[$people->id]))
        {
            unset($user[$people->id]);
            session()->put('people',$people);}
    }
}
