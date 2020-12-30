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

Auth::routes();
Route::group(['middleware'=>'user','auth'] ,function(){
Route::get('/home', 'HomeController@index')->name('home');
});
Route::get('/download', function (){
    $file = public_path(). "/Hackathon4.0GuideBook.pdf";
    $headers = [
        'Content-Type' => 'application/pdf',
    ];
    return response()->download($file, 'Hackthon 4.0 Guide Book.pdf', $headers);
});

Route::group(['middleware'=>'admin','auth'] ,function(){
Route::get('/admin', 'AdminController@index')->name('admin');
});
Route::post('/sendemail/send', 'SendEmailController@send')->name('send');
