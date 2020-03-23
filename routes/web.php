<?php

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

use RealRashid\SweetAlert\Facades\Alert;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 
Route::get('/ticket', 'ticketController@index');
Route::post('/ticket', 'ticketController@stor')->name('ticket');
Route::get('/delete{id}', 'ticketController@delete');


Route::post('/feedback{id}', 'feedbackController@stor')->name('feedback');

Route::get('/profle', 'profileController@index');



Route::get('/Aticket', 'advisorTicket@index');
Route::get('/reply', 'advisorTicket@saveReply');


Route::get('/Ahome', 'advisorHomeController@index');
 

Route::get('/bbb', function(){
    return view('advisor/contact');
});