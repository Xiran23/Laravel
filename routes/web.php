<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::view('/home', 'welcome');

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', [UserController::class, 'getUser']);
Route::get('aboutuser', [UserController::class, 'aboutuser']);
Route::get('getUserName/{name}', [UserController::class, 'getUserName']);

Route::get('admin', [UserController::class, 'adminlogin']);
//Route::get('/about/{name}', function ($name) {
//  echo $name;
//return view('about');
//});

//route::redirect('/home','/');

Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about', ['name' => $name]);
});
