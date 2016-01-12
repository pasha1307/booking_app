<?php

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'api'], function() {
    Route::post('searchavailabity', 'RoomCalendarController@searchAvailability');
    Route::post('createreservation', 'ReservationController@createReservation');
    Route::get('reservation/{id}', 'ReservationController@show');
    Route::post('payreservation', 'PaymentController@pay');
});
Route::group(['prefix' => 'adminapi'], function()
{
    Route::resource('room_type', 'RoomTypeController');
    Route::post('setpriceinrange', 'RoomCalendarController@setPriceInRangeForRoomType');
});