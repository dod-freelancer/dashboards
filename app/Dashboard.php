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
          return Dashboard::find($id)->delete();
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
        $count = Dashboard::get()->count();
        if($count < 4) {
          return Dashboard::get()->random($count);
        } else
        return Dashboard::get()->random(4);
    }

    public static function getSubject($subject){
            return Dashboard::where('subject',$subject)->get()->count();
    }

}
