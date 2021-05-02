<?php

use App\Http\Livewire\Post\Show;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OderController;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/test',Show::class);
Route::get('/pay', [OderController::class,'store']);
