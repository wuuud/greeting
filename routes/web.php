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


// free
Route::get('/comments/freeword/{free}/', 
            [App\Http\Controllers\GreetingController::class, 'free_greeting']);

// ランダム
Route::get('/comments/random/', 
            [App\Http\Controllers\GreetingController::class, 'random_greeting']);

// Route::<HTTPメソッド>('<アドレス>', [<コントローラーのクラス, 'アクション名>']);
Route::get('/comments/{time_zone}/', 
            [App\Http\Controllers\GreetingController::class, 'greeting']);
