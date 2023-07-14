<?php

namespace App\Http\Controllers;

use App\Helpers\Country;
use App\Http\Requests\AccountRequest;
use App\Services\AccountService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function account(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $geos = Country::getAllGeos();
        return view('account', [
            'user' => Auth::user(),
            'geos' => $geos
        ]);
    }

    public function updateAccount(AccountRequest $request, AccountService $accountService): RedirectResponse
    {
        $accountService->updateAccount($request->validated());
        return redirect()->back();
    }


}
