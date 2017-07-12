<?php

namespace App\Http\Controllers;

use App\Dashboard;
use App\Observer;
use App\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $dashboards = Dashboard::getAll();
        $observed = Observer::where('user_id',Auth::user()->id)->get()->count();

        return view('home',compact(['dashboards','observed']));
    }

    /**
     * Delete each dashboard.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id){
        Dashboard::deleteDashboard($id);
        return  redirect('/home');
    }

    /**
     * Add new dashboard to user account
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    public function add(){
        return Dashboard::add();
    }

    public function edit($id){
        $dash = Dashboard::find($id);
        return view('dashboards.edit_dashboard',compact('dash'));
    }

    public function change($id){
        Dashboard::edit($id,request('title'),request('body'));
        return redirect('home');
    }

    // show all topics with count
    public function show_subject_group(){

        $subjects = [];
        $statuses = Status::get();

        foreach ($statuses as $l => $status){
            $subjects[$l][$status->status_dash] = Dashboard::getSubject($status->status_dash);
        }
        return view('dashboards.all_dashboards_subject')->with('subjects',$subjects);
    }


    public function show_all_each_subject(){
        return dd(Dashboard::getSubject('programming'));exit();
        $dashboards = Dashboard::get();
        return view('dashboards.all_dashboards_subject',compact('dashboards'));
    }

    public function show_each_group($id){
        $group = Dashboard::get_each_subject($id);
        return view('dashboards.dashboards_each_category_show',compact('group'));
    }

    public function fallow($id){

        $user = Observer::where('user_id',Auth::user()->id)->where('dashboard_id',$id)->get();
//        dd($user);exit();
        if (isset($user[0])){
            return "<p>You've observed this dashboard</p>" . "<a href=\"../../dashboards\">Back</a>";
        } else {
            $observe = new Observer();
            $observe->user_id = Auth::user()->id;
            $observe->dashboard_id = $id;
            $observe->save();
            return back();
        }
    }

}
