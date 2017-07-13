<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observer extends Model
{
    // show observed dashboards
    public static function show($id_user){
        $observed_dash_id = self::where('user_id',$id_user)->pluck('dashboard_id')->toArray();
        $arr =[];
        foreach ($observed_dash_id as $ob){
            $arr[] = Dashboard::where('id',$ob)->get();
        }
        return $arr;
}
}
