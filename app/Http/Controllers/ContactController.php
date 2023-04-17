<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\Feedback;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
    public function sendFeedback(ContactRequest $request)
    {
        $validated = $request->validated();

        Feedback::query()->create([
            'name' => $validated['name'] ?? null,
            'email' => $validated['email'] ?? null,
            'number'=>$validated['number']??null,
            'message' => $validated['message'],
        ]);

        return redirect()->back()->with('Отлично!','Ваше обращение отправлено!');
    }
}
