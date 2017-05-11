<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fileentry;
use DB;
class CategoryController extends Controller
{
    public function show($id)
    {
        $entries = DB::table('fileentries')->where([
            ['category_id', '=', $id]
        ])->get();

        return view('site/category.index', compact('entries'));
    }

}
