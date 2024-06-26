<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    $users = User::all();
    Auth::loginUsingId(2);
    return view('welcome', ['users' => $users]);
});

Route::get('/user/create', function () {
    return view('user_create');
})->middleware('can:create_users')->name('user.create');

Route::post('/user/store', function () {
    dd('olá mundo');
})->middleware('can:store_users')->name('user.store');