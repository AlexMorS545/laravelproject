<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\IndexController;
use \Admin\AdminNewsController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [PageController::class, 'index']);

Route::group(['prefix'=>'category'], function (){
    Route::get('news/sport', [PageController::class, 'sport'])->name('/category/sport');
    Route::get('news/economic', [PageController::class, 'economic'])->name('/category/economic');
});

Route::group(['prefix'=>'category'], function() {
    Route::get('/news', [NewsController::class, 'showAllNews'])->name('/category/news');
    Route::get('/news/{id}', [NewsController::class, 'showOneNews'])
        ->where('id', '\d+')
        ->name('/category/news/');
});



Route::group(['prefix'=>'admin'], function() {
    Route::resource('/news', AdminNewsController::class);
});

