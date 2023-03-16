<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;


class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
}
