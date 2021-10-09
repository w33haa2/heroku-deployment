<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Events\MessageSent;

class ChatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.chat');
    }

    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        $message = Message::create([
            'message' => $request->message,
            'user_id' => $request->user['id']
        ]);
        broadcast(new MessageSent($message->load('user')))->toOthers();

        return ['status' => 'success', 'message' => $message];
    }
}
