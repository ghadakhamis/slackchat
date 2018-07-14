<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Slack;

class ChatsController extends Controller
{
    //
    public function create(){
        return view ('chats.create');
    }
    public function store(Request $request)
    {
        $message=$request->only(['message','user']);
        Slack::send($message['message']);
        
        return redirect('/chats/create'); 
    }

}
