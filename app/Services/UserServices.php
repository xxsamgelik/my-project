<?php

namespace App\Services;
use App\Models\User;

class UserServices
{
    public function getUser(array $params)
    {
        $users = User::query()->with('user');

        $users = match ($params['sort'] ?? null) {
            'email' => $users->withAvg('users', 'email_verified_at')->groupBy('id')->orderByDesc('email_verified_at'),
            'name' => $users->orderBy('name'),
        };
        return $users->paginate(6);
    }
}
