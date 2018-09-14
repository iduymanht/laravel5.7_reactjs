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

// Route::any('/{any}', 'MyController@myMethod')->where('any', '.*');
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('/{path?}', 'path.to.view')
//      ->where('path', '.*')
//      ->name('react');
// return view('welcome');
Route::get('/', function () {
    return view('welcome');
});
Route::pattern('path', '[a-zA-Z0-9-/]+');
Route::any( '{path}', function( $page ){   
     return view('welcome');
});