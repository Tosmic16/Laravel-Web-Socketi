<?php

use App\Events\ChatMessageEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ws', function () {
    return view('websocket');
});
Route::post('/chat-message', function (Request $request) {
    var_dump($request->all());
   
  event(  new ChatMessageEvent($request->all()));
    return null;
});

