<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\SliderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class SliderController extends Controller
{
    public function getSliderItems()
    {
        // Проверяем, есть ли список пользователей в кеше
        $users = Cache::get('slider_users');

        // Если список пользователей не найден в кеше, делаем запрос к базе данных
        if (!$users) {
            $users = User::all();

            // Сохраняем список пользователей в кеше на 5 минут
            Cache::put('slider_users', $users, 5 * 60);
        }

        $sliderItems = SliderItem::all();

        return view('slider', [
            'sliderItems' => $sliderItems,
            'users' => $users,
        ]);
    }

    public function like(Request $request, $user_id)
    {
        $like = new Like();
        $like->user_id = Auth::id();
        // Идентификатор текущего аутентифицированного пользователя
        $like->liked_user_id = $user_id; // Идентификатор пользователя, которого вы лайкнули
        $like->save();

        return redirect()->back(); // Перенаправление назад после обработки лайка
    }


    public function skip(Request $request, $user_id)
    {
        // Логика пропуска пользователя

        return redirect()->back();
    }
}
