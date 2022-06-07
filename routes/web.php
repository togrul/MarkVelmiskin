<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
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

Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/projects/list',[ProjectController::class,'list'])->name('projects.list');
Route::get('/projects/{project}',[ProjectController::class,'project'])->name('projects.item');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
