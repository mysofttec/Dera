<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Intervention\Image\Facades\Image;

class UsersController extends Controller
{
    public function profile()
    {

        return view('profile.index',array('user'=>Auth::user()));
    }

    public function update_avatar(Request $request)
    {
        if($request->hasFile('avatar'))
        {
            $avatar=$request->file('avatar');
            $filename=time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('uploads/avatars/'.$filename));
            $user= Auth::user();
            $user->avatar=$filename;
            $user->save();
        }
        return redirect('profile');
    }

    public function updateProfile(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);
        $user->update($input);
        DB::table('role_user')->where('user_id',$id)->delete();


        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }

        return redirect('profile');
    }



}
