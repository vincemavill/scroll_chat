<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Home extends Model
{
   protected static function get_data($offset,$limit)
    {
        $result = DB::table('refcitymun')->select('*')
        ->skip($offset)->take($limit)->get()->toArray();

        return $result;

    }
}