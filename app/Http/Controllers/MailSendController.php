<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\toMe;
use App\Mail\toUser;

class MailSendController extends Controller
{
    private $email = 'projectmuzrikgames@gmail.com';

    public function send(Request $request){

        Mail::to($request->email)->send(new toUser($request->link, $request->subject));
        return view('index');

    }
}
