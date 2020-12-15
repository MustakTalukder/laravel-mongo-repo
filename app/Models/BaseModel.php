<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class BaseModel extends Eloquent
{

    /* user model attribute */
    const ROLE_ADMIN = 1;
    const ROLE_USER = 2;

    // public static function mongoId($id)
    // {
    //     try{
    //         $obId = new \MongoDB\BSON\ObjectID($id);
    //     }catch (\Exception $e){
    //         $obId = new \MongoDB\BSON\ObjectID();
    //     }

    //     return $obId;
    // }

    // public static function ISODate($date = null)
    // {
    //     // return ISO Date
    //     if($date == null)
    //         return new \MongoDB\BSON\UTCDateTime();
    //     else
    //         return new \MongoDB\BSON\UTCDateTime(Carbon::parse($date));
    // }

  
}
