<?php

namespace App\Http\Controllers;

use App\Jobs\sendMails;
use App\User;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMails()
    {
        $emails =  User::select('email')->chunk(50,function ($data){
            $this->dispatch(new sendMails($data));
        });

        return ' Success, will send emails to users, you can leave this page';
    }
}
