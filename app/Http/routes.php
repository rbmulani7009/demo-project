<?php

Route::get('/', function () {
    return view('guestbook');
});

//API
Route::get('api/messages', function () {
    return App\Message::All();
});

Route::post('api/messages', function () {
    return App\Message::create(Request::all());
});