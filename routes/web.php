<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycustomctlr;
use App\Http\Controllers\GreatandWhoisCtlr;

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

Route::get('/', [mycustomctlr::class, 'index']);

Route::get('bonjour/{name}',[GreatandWhoisCtlr::class, 'great'])->name('greating');

Route::get('whois/{name}',[GreatandWhoisCtlr::class, 'whois']);

Route::get('wanna-great/{name}',function($name){
    return redirect()-> route('greating', ['name' => $name]);
});
