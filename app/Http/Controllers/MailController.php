<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send()
    {

      Mail::send(['text' => 'mails.mail'], ['name', 'Minaci'], function($message){
        $message->to('davidyfreelance@gmail.com', 'A David')->subject('Test');
        $message->from('minaci2018@gmail.com', 'Minaci');
      });

      return redirect('misses')->with('status', 'Mail envoyé');

    }
}
