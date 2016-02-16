<?php


Route::get('home', 'PagesController@home');

Route::get('goal', 'PagesController@goal');

Route::get('group', 'PagesController@group');

Route::get('about', 'PagesController@about');

Route::get('login', 'PagesController@login');

Route::get('Database', 'DatabaseController@index');

//Route::get('Database/create', 'DatabaseController@create');

//Route::post('Database', 'DatabaseController@store');

//Route::put('Database', 'DatabaseController@update');

//Route::delete('Database', 'DatabaseController@destroy');