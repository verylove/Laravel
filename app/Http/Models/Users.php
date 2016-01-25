<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Cache;

class Users extends CommonModel
{
    public $table = 'users';


    public function add($data){

        $data['name'] = 'tt';
        $data['email'] = 'tt';
        $data['password'] = 'tt';
        $result = $this->add($data);
        return $result;
    }

    public static function addUser($id)
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
