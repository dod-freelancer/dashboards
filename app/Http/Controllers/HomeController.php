<?php

namespace App\Http\Controllers;

use App\Dashboard;
use App\Status;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;

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
        return view('home',compact('dashboards'));
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


}
