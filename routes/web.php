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

Route::view('/{path?}', 'app');
// Route::get('/employee', 'EmployeeController@yes');

// Route::group(
//     [
//         // 'middleware'=> ['auth'],
//         'prefix' => 'admin'], function () {

//         Route::group(
//             [
//                 'prefix' => 'manage',
//                 //kalo controller ditaro di folder didalem app\http\controllers pake ini
//                 // 'namespace' => 'UserMan', 
//             ], function () {

//                     Route::resource('employee', 'EmployeeController');
//                     Route::get('ohyes', 'EmployeeController@yes')->name('employee.ohyes');

//             });
//     });


// Route::post('/employee', 'EmployeeController@yes');
// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
