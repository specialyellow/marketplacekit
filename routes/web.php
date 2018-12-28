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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('welcome');
});
*/



include "admin.php";

Route::get('/phpinfo', function () {

	phpinfo();
});


Route::get('/cp', function () {
    if(env('DEMO_PANEL')) {
        \Auth::loginUsingId(1, true);
        return redirect("/panel");
    }
});

include "classifieds.php";


