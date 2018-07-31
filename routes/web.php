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

Route::get('/', function () {
    return redirect('misses');
});

Route::get('send', 'MailController@send');

Route::get('/ticket-recu', function () {
    return view('tickets.show');
});

Route::get('/classement', 'MissController@classement');

Route::post('voting/{miss}', 'VoteController@voting');

Route::post('achat', 'TicketController@achat');

Route::resource('misses','MissController');

Route::resource('votes','VoteController');

Route::resource('tickets','TicketController');
