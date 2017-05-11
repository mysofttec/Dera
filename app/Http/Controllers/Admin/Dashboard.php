<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class Dashboard extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();
        if (Auth::check()) {
            return view('admin.dashboard.index');

                        }
        else
        {
            return redirect()->route('site.index');
        }
    }
}
