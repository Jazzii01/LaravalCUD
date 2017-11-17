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

Route::get('/', function () {
    return view('admin.H');
});
// Route::get('/', 'HomeController@index');
Route::get('/about', 'uuController@about');

Route::resource('admin/uues', 'Admin\uutController');
// Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// Route::get('foo', function () {
//     return 'Hello World';
// });
// Route::get('/about', function () {
//   $data['name']='Nungning';
//     return view('about',$data);
// });
