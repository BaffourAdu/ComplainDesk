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

//Home Route
Route::get('/', function () {
    return view('welcome');
});

//Route for authentication Handling
Auth::routes();

//Route to User's Dashboard
Route::get('/home', 'HomeController@index')->name('home');

//Route to display Page to Create TIcket
Route::get('/tickets', 'TicketsController@create');
//Route to Handle ticket Storage
Route::post('/tickets', 'TicketsController@store');
//Route to display authenticated User's Tickets
Route::get('/mytickets', 'TicketsController@userTickets');
//Route to display more information on a single ticket
Route::get('/tickets/{ticket_id}', 'TicketsController@show');

//ROute to Handle new comments storage
Route::post('/comment', 'CommentsController@postComment');

//Admin routes( they should all be prefix with /admin in the Url)
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    //Route to display all tickets
    Route::get('tickets', 'TicketsController@index');
    //Routes to close a ticket
    Route::post('close_ticket/{ticket_id}', 'TicketsController@close');
});