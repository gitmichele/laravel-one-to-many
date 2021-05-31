<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')
    -> name('home');

Route::get('show_employee/{id}', 'HomeController@show_employee')
    -> name('show_employee');

Route::get('show_task/{id}', 'HomeController@show_task')
    -> name('show_task');