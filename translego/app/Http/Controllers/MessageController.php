<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function listAllMessage(){
        $messages=Message::get();
        return view('messages', compact('messages'));
    }
}
