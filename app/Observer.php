<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observer extends Model
{
<<<<<<< HEAD
    // show observed dashboards
    public static function show($id_user){
        $observed_dash_id = self::where('user_id',$id_user)->pluck('dashboard_id')->toArray();
        $arr =[];
        foreach ($observed_dash_id as $ob){
            $arr[] = Dashboard::where('id',$ob)->get();
        }
        return $arr;
}
=======
//
>>>>>>> 66aa46348018952cea5c9b96faebff55806b29d5
}
