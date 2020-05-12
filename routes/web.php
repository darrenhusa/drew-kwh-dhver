<?php

Route::get('/', "PagesController@home");

Route::get('/', function () {
  return view('welcome');

});
Route::resource('customers', "CustomersController");

// Route::resource('reservations', 'ReservationsController');
Route::get('/reservations', "ReservationsController@index");
Route::get('/reservations/create/{customer_id}', "ReservationsController@create");
// Route::post('/reservations/{customer_id}', "ReservationsController@store");
