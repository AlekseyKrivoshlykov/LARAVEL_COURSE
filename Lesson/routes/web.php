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

Route::get('/admin', [App\Http\Controllers\Admin\NewsController::class, 'index'])
->name('admin::index');
Route::match(['get', 'post'], '/admin/news/create', [App\Http\Controllers\Admin\NewsController::class, 'create'])
->name('admin::news::create');
Route::match(['get', 'post'], '/admin/update/{news}', [App\Http\Controllers\Admin\NewsController::class, 'update'])
->name('admin::news::update');
Route::match(['get', 'post'], '/admin/delete/{news}', [App\Http\Controllers\Admin\NewsController::class, 'delete'])
->name('admin::news::delete');




Route::match(['get', 'post'],'/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])
->name('admin::category::create');



Route::get('/categoryNews', [App\Http\Controllers\MainController::class, 'index']);
Route::get('/categoryNews/{id}', [App\Http\Controllers\MainController::class, 'showCategory'])
->name('news::showCategory');

Route::get('/authorization', [App\Http\Controllers\AuthController::class, 'index']);

