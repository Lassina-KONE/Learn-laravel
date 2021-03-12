<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycustomctlr extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
}
