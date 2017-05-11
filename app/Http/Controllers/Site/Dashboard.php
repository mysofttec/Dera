<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Category;
class Dashboard extends Controller
{

    public function index()
    {
        $cat= array(1,2,3,4,5,6,);
        if (Auth::user()){
            //$u=0;
        }
return view('site.dashboard.dera-home', compact('cat'));
        //return view('site.dashboard.dera-home',compact($u));
    }
}
