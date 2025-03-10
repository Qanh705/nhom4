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

Route::get('/vidu2','App\Http\Controllers\ViDuController@vidu2');
Route::post('/tinhtong','App\Http\Controllers\ViDuController@tinhtong');

Route::get("/qlsach/theloai","App\Http\Controllers\BookController@laythongtintheloai");
Route::get("/qlsach/thongtinsach","App\Http\Controllers\BookController@laythongtinsach");

//Route::get("/add/theloai1","App\Http\Controllers\AddController@add");
//Route::post("/add/save","App\Http\Controllers\AddController@save");
//Route::post('/add/save', [AddController::class, 'save'])->name('save');

//Route::get("/add/theloai2","App\Http\Controllers\AddController@add2");
Route::get("/qlsach/themtheloai","App\Http\Controllers\BookController@themtheloai");
Route::post("/qlsach/luutheloai","App\Http\Controllers\BookController@luutheloai");

Route::get('/trang1','App\Http\Controllers\ViduLayoutController@trang1');
Route::get('/trang2','App\Http\Controllers\ViduLayoutController@trang2');

Route::get('/sach','App\Http\Controllers\ViduLayoutController@sach');

Route::get('/sach/theloai/{id}','App\Http\Controllers\ViduLayoutController@theloai');
Route::get('/sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');