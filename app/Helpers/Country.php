<?php

namespace App\Helpers;

class Country
{
    public static function getAllGeos()
    {
        return json_decode(file_get_contents(public_path('geos.json')));
    }
}
