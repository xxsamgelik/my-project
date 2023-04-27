<?php

namespace App\Services;

use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Support\Facades\Auth;

class AccountService
{
    public function updateAccount(array $data): ?User
    {
        /** @var User $user */
        $user = Auth::user();
        if ($user) {
            $prepareData = [
                'birthday' => $data['date_birthday'],
                'sex' => $data['sex'],
                'status'=>$data['status'],
                'country' => $data['country'],
            ];
            if (!$user->information) {
                $userInformation = new UserInformation($prepareData);
                $user->information()->save($userInformation);
            } else {
                $user->information()->update($prepareData);
            }
        }

        return $user;
    }
}
