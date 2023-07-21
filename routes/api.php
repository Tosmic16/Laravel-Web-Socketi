<?php

use Illuminate\Http\Request;
use App\Events\ChatMessageEvent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('throttle:5')->group(function () {
Route::get('/testground', function(){
    
    event(new ChatMessageEvent(['message'=>'hello','user'=>1]));
    return null;
   });
});


   
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
