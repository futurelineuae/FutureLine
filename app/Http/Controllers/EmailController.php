<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function create()
    {

        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => '',
          'message' => '',
        ]);

        $data = [
          'subject' => 'Request Quote',
          'email' => $request->email,
          'content' => $request->message
        ];

        Mail::send('emails.request-quote', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}