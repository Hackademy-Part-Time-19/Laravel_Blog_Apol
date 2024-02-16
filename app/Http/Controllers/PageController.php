<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{





    public function HomePage()
    {
        return view('Home', ['titoloHome' => 'Home']);
    }


    public function WhoIam()
    {
        return view('ChiSono', ['titoloChiSono' => 'Chi Sono']);
    }

    public function Contacts()
    {
        return view('Contatti');
    }
    







}
