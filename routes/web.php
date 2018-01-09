<?php


Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');


Route::post('/posts/{post}/comments', 'CommentsController@store');


Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create');

Route::get('/logout', 'SessionsController@destroy');