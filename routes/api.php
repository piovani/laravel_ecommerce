<?php

use Illuminate\Support\Facades\Route;

Route::post('auth', 'AuthController@authenticate');
