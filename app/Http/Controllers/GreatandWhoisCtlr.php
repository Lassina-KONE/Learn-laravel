<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreatandWhoisCtlr extends Controller
{
    //
    public function great($name){
        return view('hello')->withname($name);
    }

    public function whois($name){
        return view('whois')-> with(['name' => $name]);
    }
}
