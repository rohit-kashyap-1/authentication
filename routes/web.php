<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/',[LoginController::class,'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/create-user',function(){
    $user = new User();
    $user->password = "rohit@123";
    $user->email ="r23.tgc@gmail.com";
    $user->name  = "Rohit";
    $user->save();
});
