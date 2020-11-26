<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

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

Route::get('/video',[VideoController::class,'index'])->name('video.index');

Route::post('/video',[VideoController::class,'add'])->name('video.add');

Route::post('/image',[VideoController::class,'img'])->name('video.img');

