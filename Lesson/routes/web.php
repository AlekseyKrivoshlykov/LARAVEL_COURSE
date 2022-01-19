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

Route::get('/greeting', function () {
    return 'Nice to see you!';
});

// Route::get('/anotherView', function () {
//     return view('anotherView');
// });

Route::get('/category_news', [App\Http\Controllers\MainController::class, 'index']);

Route::get('/category_news/{id}', [App\Http\Controllers\MainController::class, 'showCategory']);

Route::get('/authorization', [App\Http\Controllers\AuthController::class, 'index']);
