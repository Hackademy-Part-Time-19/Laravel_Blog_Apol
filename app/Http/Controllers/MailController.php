<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{


    public function SendEmail(Request $request)
    {
        $data = $request->all();
        if ($data['email']==''){
            return redirect()->route('Contacts')->with('error', 'Devi inserire una email');
        }

    Mail::to('djyuliano@yahoo.com')->send(new ContactMail($data['name'], $data['email'], $data['description'], $data['adress'] ));
        
        return redirect()->route('Contacts')->with('success', 'Email inviata correttamente');
    }
}
