<?php

namespace App\Http\Controllers;

use App\Dashboard;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{

    public function construct(){
        $this->middleware('guest');
    }
    public function index(){
        $discover = Dashboard::discover();
        return view('auth.discover',compact('discover'));
    }
}
