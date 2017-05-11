<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Nahid\Talk\Facades\Talk;

use Auth;
use View;
use App\User;
class MessageController extends Controller
{
    protected $authUser;

    public function __construct()
    {
        $this->middleware('auth');
        Talk::setAuthUserId(Auth::user()->id);
        View::composer('partials.peoplelist', function($view) {
            $threads = Talk::threads();
            $view->with(compact('threads'));
        });
    }
    public function index()
    {

        $users = User::all();
        return view('messages.index', compact('users'));
    }
    public function chatHistory($id)
    {
        $conversations = Talk::getMessagesByUserId($id);
        $user = '';
        $messages = [];
        if(!$conversations) {
            $user = User::find($id);
        } else {
            $user = $conversations->withUser;
            $messages = $conversations->messages;
        }
        return view('messages.conversations', compact('messages', 'user'));
    }
    public function ajaxSendMessage(Request $request)
    {

        if ($request->ajax()) {
            $rules = [
                'messages-data'=>'required',
                '_id'=>'required'
            ];
            $this->validate($request, $rules);
            $body = $request->input('messages-data');
            $userId = $request->input('_id');
            if ($message = Talk::sendMessageByUserId($userId, $body)) {
                $html = view('ajax.newMessageHtml', compact('messages'))->render();
                return response()->json(['status'=>'success', 'html'=>$html], 200);
            }
        }
    }
    public function ajaxDeleteMessage(Request $request, $id)
    {
        if ($request->ajax()) {
            if(Talk::deleteMessage($id)) {
                return response()->json(['status'=>'success'], 200);
            }
            return response()->json(['status'=>'errors', 'msg'=>'something went wrong'], 401);
        }
    }
}
