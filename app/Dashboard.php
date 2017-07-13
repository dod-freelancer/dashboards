<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Auth;
class Dashboard extends Model
{
    /**
     * Get all dashboards for DB each User
     *
     * @return mixed
     */

    public static function getAll(){
        return Dashboard::orderBy('updated_at','DESC')->where('user_id',Auth::user()->id)->get();
    }

    public static function deleteDashboard($id){
          return self::find($id)->delete();
    }

    /**
     *
     * Add new Dashboard
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function add(){
        $dash = new Dashboard();
        $dash->user_id = Auth::user()->id;
        $dash->subject = request('subject');
        $dash->title = request('title');
        $dash->body = request('body');

        if ($dash->body && $dash->title && $dash->user_id && $dash->subject){
            $dash->save();
            return redirect('/home')->with('success','Great, you added new dashboard to your account');
        }
        else {
            return redirect()->back()->with('error','Something went wrong');
        }
    }

    /**
     * Edit exists dashboard
     *
     * @param $id
     * @param $title
     * @param $body
     */
    public static function edit($id,$title,$body){

        Dashboard::where('id', $id)->update(array(
            'title' => $title,
            'body' => $body,
        ));
}

// we show 4 random dashboards for unregistered users
    public static function discover(){
        $count = self::get()->count();
        if($count < 4) {
          return self::get()->random($count);
        } else
        return self::get()->random(4);
    }

    // downloaded dashboards category - count
    public static function getSubject($subject){
            return self::where('subject',$subject)->get()->count();
    }

    // downloaded all dashboards - each category
    public static function get_each_subject($category_name){
       return self::where('subject',$category_name)->get();
<<<<<<< HEAD
    }

    public static function get_observed_user($id_user){
        $observed_dash_id = Observer::where('user_id',$id_user)->pluck('dashboard_id')->toArray();
        $arr =[];
        foreach ($observed_dash_id as $ob){
           $arr[] = Dashboard::where('id',$ob)->get();
        }
        return view('dashboards.observed_user_blade',compact('arr'));
=======
>>>>>>> 66aa46348018952cea5c9b96faebff55806b29d5
    }

}
