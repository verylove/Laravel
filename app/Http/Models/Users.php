<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Cache;

class Users extends Model
{
    public $table = 'users';

    public static function getUser($id)
    {

        $key = 'key_id_'.$id;
        if (Cache::has($key))
        {
            //
            return $value = Cache::get($key);
        }


        Cache::forever($key, 'value');

        return 'value--';
    }
}
