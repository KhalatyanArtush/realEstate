<?php

use App\Http\Controllers\DownloadFileController;
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

//Route::get('/', function () {
//    return view('home');
//})->name('home');

Route::get('/single?key=', function () {
    return view( 'single', [\App\Http\Controllers\PostsController::class , 'SinglePost']);
})->name('single');

Route::get('/addpost', function () {
    return view('addpost');
})->name('addpost');

Route::get('/new', function () {
    return view('new');
})->name('new');


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function (){
   Route::group(['namespace' => 'Post'], function (){
       Route::get('/post', 'indexController@__invoke')->name('admin.post.index');
   });
});




Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/agents', function () {
    return view('agents');
})->name('agents');
//
//Route::get('/single', function () {
//    return view('single');
//})->name('single');

Route::post('/addpost','App\Http\Controllers\PostsController@submit')->name('creat');
Route::get('/','App\Http\Controllers\PostsController@allData')->name('alldatas');
//Route::get('/','App\Http\Controllers\PostsController@filterdatas')->name('filterdatas');
Route::get('/single','App\Http\Controllers\PostsController@SinglePost')->name('SinglePost');
//Route::get('/single','App\Http\Controllers\PostsController@allDatasingle')->name('alldatasingle');
