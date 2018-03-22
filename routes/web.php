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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::view('/emails', 'emails.sample_email');


//Redirect Homepage to login
Route::redirect('/', '/login', 301);

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
//Route to Handle User Settings Update
Route::get('/settings', 'UserSettingsController@index');
//Route to Handle User Settings Update
Route::post('/settings', 'UserSettingsController@updateTelephone');


//Admin routes( they should all be prefix with /admin in the Url)
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    //Route to display all tickets
    Route::get('tickets', 'TicketsController@index');
    //Routes to close a ticket
    Route::post('close_ticket/{ticket_id}', 'TicketsController@close');
    //Route to display Page to Create TIcket
    Route::get('/category', 'CategoriesController@create');
    //Route to Handle ticket Storage
    Route::post('/category', 'CategoriesController@store');
    //Route to Delete Category
    Route::post('category/delete/{id}', 'CategoriesController@delete');
    //
    Route::get('/users', 'AdminController@adminUserCreate');
    //
    Route::post('/users', 'AdminController@adminUserStore');
    //
    Route::post('/users/{id}', 'AdminController@delete');
});
