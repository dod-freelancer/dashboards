<?php

namespace App\Http\Controllers;

use App\Dashboard;
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

    public function edit(){
        Dashboard::edit(request('id'),request('body'),request('title'), Carbon::now()->toDateTimeString());
        return redirect('/home');
    }

}
