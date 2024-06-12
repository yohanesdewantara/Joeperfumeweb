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

Route::get("/", "PageController@login")->name('login');
Route::post("/login", "AuthController@ceklogin");
Route::get("/user", "PageController@formedituser");
Route::post("/updateuser", "PageController@updateuser");
Route::get("/logout", "AuthController@ceklogout");
Route::get("/home", "PageController@home");
Route::get("/_daftar_parfum", "PageController@_daftar_parfum")->middleware('auth');
// Route::get("/_daftar_parfum", "PageController@_daftar_parfum");

Route::get("/_daftar_parfum/add-form", "PageController@formaddparfum");
Route::post("/save", "PageController@saveparfum");
Route::get('/settings', "PageController@settings");

Route::get("/edit-form/{id}", "PageController@formeditparfum");

Route::put("/update/{id}", "PageController@updateparfum");
Route::get("/delete/{id}", "PageController@deleteparfum");

Route::group(['middleware' => ['guest']], function () {
    Route::get('/', 'PageController@login')->name('login');
    Route::post('/login', 'AuthController@ceklogin');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get("/user", "PageController@formedituser");
    Route::post("/updateuser", "PageController@updateuser");
    Route::get("/logout", "AuthController@ceklogout");
    Route::get("/home", "PageController@home");
    Route::get("/_daftar_parfum", "PageController@_daftar_parfum")->middleware('auth');
   

    Route::get("/_daftar_parfum/add-form", "PageController@formaddparfum");
    Route::post("/save", "PageController@saveparfum");
    Route::get('/settings', "PageController@settings");

    Route::get("/edit-form/{id}", "PageController@formeditparfum");

    Route::put("/update/{id}", "PageController@updateparfum");
    Route::get("/delete/{id}", "PageController@deleteparfum");

});


