<?php

use Illuminate\Support\Facades\Route;


// #########      LogSign Controller   #########

Route::post('/register','LogSignController@register')->name('register');
Route::post('/logCheck','LogSignController@logCheck')->name('logCheck');
Route::get('/userLogout','LogSignController@userLogout')->name('userLogout');


// #########      FrontController    #########


Route::get('/home','FrontController@homePage')->name('home');
Route::get('/signup','FrontController@signup')->name('signup');
Route::get('/login','FrontController@login')->name('login');

Route::post('/bookingList','FrontController@bookingList')->name('bookingList');
Route::get('/bookingListView','FrontController@bookingListView')->name('bookingListView');

Route::get('/bookingStatus','FrontController@bookingStatus')->name('bookingStatus');



// #########      DashBoard Controller    #########

Route::get('/','DashBoardController@adminIndex')->name('admin');

// Other countries List
Route::get('/addPlaces','DashBoardController@addPlacesForm')->name('addPlaces');
Route::post('/newPlaces','DashBoardController@newPlaces')->name('newPlaces');//capturing data from request
Route::get('/newPlacesList','DashBoardController@newPlacesList')->name('newPlacesList');

// Bangladesh Places List
Route::get('/addPlacesBDForm','DashBoardController@addPlacesBDForm')->name('addPlacesBDForm');
Route::post('/newBDPlaces','DashBoardController@newBDPlaces')->name('newBDPlaces');//capturing data from request
Route::get('/bdPlacesList','DashBoardController@bdPlacesList')->name('bdPlacesList');

// Delete country items from dashBoard
Route::get('/deleteCountry/{id}','DashBoardController@deleteCountry')->name('deleteCountry');


// Delete Places items of Bangladesh from dashBoard
Route::get('/deletePlacesBD/{id}','DashBoardController@deletePlacesBD')->name('deletePlacesBD');

// Approve user status
Route::get('/changeStatus/{id}','DashBoardController@changeUserStatus')->name('changeStatus');





