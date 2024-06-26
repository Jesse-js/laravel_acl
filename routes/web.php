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
    // roles
    // abilities
    //ability_role
        //ability_id
        //role_id
    //users
    //user_role
        //user_id
        //role_id
    
    // admin
        //create_post 
        //create_forum
        //delete_user
    // guest
        // create_user
        // create_post
        // edit user
    // employee
        //delete_user
        //create_post
        // delete_post
    $users = User::all();
    Auth::loginUsingId(1);
    return view('welcome', ['users' => $users]);
});
