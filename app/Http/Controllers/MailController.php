<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Mail\MyMail;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendMessage (Request $request) {
        $usermail = env('MAIL_USERNAME');
       
        $this->validate($request, [ 'email' => 'required' ]);
        $this->validate($request, [ 'nom' => 'required' ]);
        $this->validate($request, [ 'prenom' => 'required' ]);
        $this->validate($request, [ 'message' => 'required' ]);
        Mail::to($usermail)->queue(new MyMail($request->all()));

        return back()->with('Message_envoye', 'ok');
       
       
    }
}
