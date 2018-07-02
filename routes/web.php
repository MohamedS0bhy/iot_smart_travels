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

Route::group(['middleware'=>['web','admin']],function(){

  // #admin this route leads you to the Admin panel (the main adminpanel page)
    Route::get('/adminpanel','AdminController@index');

//Countries
Route::get('/adminpanel/countries','CountryController@index');
Route::get('/adminpanel/countries/{id?}/active','CountryController@activate');
Route::post('/adminpanel/countries/','CountryController@store');
Route::get('/adminpanel/countries/{id}/show','CountryController@show');

Route::get('/adminpanel/countries/{id}/drop','CountryController@drop');


//Cities
Route::get('/adminpanel/cities','CityController@index');
Route::get('/adminpanel/cities/{id?}/active','CityController@activate');
Route::post('/adminpanel/cities/','CityController@store');
Route::get('/adminpanel/cities/{id}/show','CityController@show');
Route::get('/adminpanel/cities/{id}/drop','CityController@drop');



//airlines
Route::get('/adminpanel/airlines','AirlineController@index');
Route::get('/adminpanel/airlines/{id?}/active','AirlineController@activate');
Route::post('/adminpanel/airlines/','AirlineController@store');
Route::get('/adminpanel/airlines/{id}/show','AirlineController@show');
Route::get('/adminpanel/airlines/{id}/drop','AirlineController@drop');

// Flihgts
Route::get('/adminpanel/flights','flightsController@index');
Route::get('/adminpanel/flights/{id?}/active','flightsController@activate');
Route::get('/adminpanel/flights/add','flightsController@create');

Route::post('/adminpanel/flights/','flightsController@store');
Route::get('/adminpanel/flights/{id}/show','flightsController@show');
Route::get('/adminpanel/flights/{id}/drop','flightsController@delete');
Route::get('/adminpanel/flights/{id}/edit','flightsController@edit');
Route::patch('/adminpanel/flights/update/{id}','flightsController@update');



// admin travellers
Route::get('/adminpanel/travellers','TravellerController@showTravellers');
Route::get('/adminpanel/travellers/{id}/showSingleTraveller','TravellerController@showSingleTraveller');
Route::get('/adminpanel/travellers/addTravellers','TicketController@addTravellers');
Route::get('/adminpanel/travellers/{id}/addSingleTraveller','TicketController@addSingleTraveller');
// editing travellers data
Route::get('/adminpanel/travellers/{id}/edit','TicketController@edit');


Route::post('/adminpanel/addTraveller/{id}/ToFlight/','TravellerController@addTravellerToflight');


});


Route::group(['middleware'=>'web'],function()
{
Route::auth();
Route::get('/','HomeController@index');


});

Route::group(['middleware'=>['web']],function()
{
// contact us routes

  Route::get('/contact','HomeController@contact');//this routes get you to the contact us page(which contains the form)
  // user can send messages and sggestions by this function
  Route::post('/contact','ContactController@store');


});


Route::get('/users/{id}/booknow/','UserTravellerController@booknow')->middleware('auth');

Route::get('/users/traveller/','UserTravellerController@index')->middleware('auth');
Route::post('/users/traveller/','UserTravellerController@store')->middleware('auth');

Route::get('/users/{id}/userticket/','UserTravellerController@userGetTickets')->middleware('auth');
Route::get('/users/{id}/singleTicket/','UserTravellerController@userSingleTicket')->middleware('auth');
