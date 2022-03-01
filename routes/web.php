<?php

use App\Events\ChatEvent;
use App\Http\Livewire\Chat;
use App\Http\Livewire\Counter;
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
    return view('home');
});

Route::get('/sending', function () {
    broadcast(new ChatEvent(['nama' => 'lugas', "pesan" => date("Y-m-d H:i:s") . " ini pesannya", "chat_id" => "1"]));
});

Route::get('/coba', Counter::class);

Route::get('/chat', Chat::class);
