<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\IndexController;
use \Admin\AdminNewsController;
use \Admin\AdminCategoryController;
use \Account\AccountController;

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

Route::group([], function() {
    Route::get('/index', [PageController::class, 'index'])->name('/index');
    Route::get('/login', [PageController::class, 'login'])->name('/login');
});


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

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function() {
    Route::resource('news', AdminNewsController::class);
    Route::resource('categories', AdminCategoryController::class);
});


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'auth'], function() {
    
    Route::get('/account', AccountController::class)->name('/account');
    
    Route::group(['middleware' => 'admin'], function() {
        
        Route::group(['prefix'=>'admin', 'as'=>'admin.'], function() {
            Route::resource('news', AdminNewsController::class);
            Route::resource('categories', AdminCategoryController::class);
        });
    
    });
});

