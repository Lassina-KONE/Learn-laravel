<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('bonjour/{name}',function($name){
    return view('hello',['name'=>$name]);
})->name('greating');

Route::get('whois/{name}',function($name){
    return view('whois', ['name' => $name]);
});

Route::get('wanna-great/{name}',function($name){
    return redirect()-> route('greating', ['name' => $name]);
});
