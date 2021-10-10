<?php

use App\Services\FileControlService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::post('upload', 'App\Http\Controllers\UploadController@upload')->name('upload');
Route::get('delete', 'App\Http\Controllers\UploadController@delete')->name('delete');
Route::get('book/{book}', 'App\Http\Controllers\BookController@index')->name('book');

Route::post('answer', 'App\Http\Controllers\AnswerController@store')->name('answer.store');

Route::get('test', function () {
    return view('edit');
});
