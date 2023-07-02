<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendMailController extends Controller
{
    public function index()
    {
        return view('send-email');
    }
    public function send($message)
    {
        $toEmail = "kirill.sidorenkov.2003@yandex.ru";
        $mm = new SendMail($message);
        Mail::to($toEmail)->send(new SendMail($message));
        return redirect()
                ->back()
                ->with('message', "Message $message send success");
    }
    //
}
