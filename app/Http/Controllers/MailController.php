<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
     //   
    }
    
    public function sendEmail(){
     $detail=[
         'title'=>'Mail From Twitter Lite',
         'body'=>'this is for testing mail using gmail'
     ];
     Mail::to('amnesia338@gmail.com')->send(new TestMail($detail));
     return "email send";
    }

}
