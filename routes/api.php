<?php

use Illuminate\Http\Request;
use App\Http\Controllers\APIController;


Route::get('/_daftar_parfum/v1/search', 'APIController@searchparfum');