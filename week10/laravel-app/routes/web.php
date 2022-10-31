<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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
Route::get('welcome', [WelcomeController::class,'index']);
Route::get('/welcome/welcoming', function () {
    return view ('welcoming');
});

/*
ROUTE VERB
==========

Route::post('/', function(){
    //Handle someone sending a POST request to this route
});

Route::put('/', function(){
    //Handle someone sending a PUT request to this route
});

Route::delete('/', function(){
    //Handle someone sending a DELETE request to this route
});

Route::any('/', function(){
    //Handle any request to this route
});

Route::match('/', function(){
    //Handle GET or POST request to this route
});
*/
