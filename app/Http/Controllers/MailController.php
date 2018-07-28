<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Miss;

class MailController extends Controller
{
    public function send()
    {

      Mail::send(['text' => 'mails.mail'], ['name', 'Minaci'], function($message){
        $message->to('davidyfreelance@gmail.com', 'A David')->subject('Test');
        $message->from('yaodavidarmel@gmail.com', 'Minaci');
      });

      return redirect('misses')->with('status', 'Mail envoyé');

    }
}
