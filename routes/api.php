<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//master url 'http://url/api/v1/'
Route::group(['prefix' => 'v1',  'middleware' => ['json.response']], function () {

        Route::middleware('auth:api')->get('user', function (Request $request) {
            return $request->user();
        });
        //user access 'http://url/api/v1/u/'
        Route::group(['prefix' => 'u', 'namespace' => 'Api'], function () {
            Route::post('login', 'AuthController@login')->name('api.user.login');
            Route::post('register', 'AuthController@register')->name('api.user.register');
            //temporal delete user
            Route::get('delete/{id}', 'AuthController@delete')->name('api.user.delete');
            Route::middleware('auth:api')->group(function () {
                Route::get('logout', 'AuthController@logout')->name('api.user.logout');
                Route::get('my', 'AuthController@details')->name('api.user.details');
            });
        });

        //Administration Module 'http://url/api/v1/adm/'
        Route::group(['prefix' => 'adm', 'namespace' => 'Api'], function () {
            //User Management Module 'http://url/api/v1/adm/userman'
            Route::group(['prefix' => 'userman'], function () {
                Route::resource('useraccess', 'DummyController' ,[
                    'names' => [
                        'index'     => 'api.useraccess.index',
                        'store'     => 'api.useraccess.store',
                        'create'    => 'api.useraccess.create',
                        'show'      => 'api.useraccess.show',
                        'update'    => 'api.useraccess.update',
                        'destroy'   => 'api.useraccess.destroy',
                        'edit'      => 'api.useraccess.edit'
                    ]
                ]);
                Route::resource('employee', 'DummyController' ,[
                    'names' => [
                        'index'     => 'api.employee.index',
                        'store'     => 'api.employee.store',
                        'create'    => 'api.employee.create',
                        'show'      => 'api.employee.show',
                        'update'    => 'api.employee.update',
                        'destroy'   => 'api.employee.destroy',
                        'edit'      => 'api.employee.edit'
                    ]
                ]);
            });

            //Administration->Master Data Module 'http://url/api/v1/adm/master/{masterdata}'

            $masterdata =       
            ['anggaran', 
            'currency', 
            'daftarkantor', 
            'delegtugas', 
            'delivpoint', 
            'direktorat', 
            'divisi', 
            'divbiro', 
            'divdept', 
            'emptype', 
            'gudang', 
            'kategoripajak',
            'comptemplate',
            'menuman',
            'aset',
            'ruangan',
            'salutation'];

                    foreach ($masterdata as $s) {
                        // Route::group(['prefix' => $route, 'middleware' => ['auth:api', 'superadmin.only']], function () {
                            Route::group(['prefix' => 'master'], function ()  use ($s) {
                            // Route::prefix($s)->group(function () use ($s) {
                            Route::resource($s, 'DummyController' ,[
                                'names' => [
                                    'index'     => "api.$s.index",
                                    'store'     => "api.$s.store",
                                    'create'    => "api.$s.create",
                                    'show'      => "api.$s.show",
                                    'update'    => "api.$s.update",
                                    'destroy'   => "api.$s.destroy",
                                    'edit'      => "api.$s.edit"
                                ]
                            ]);
                    });
                }
                
        });

});

/* template

        Route::group(['prefix' => ''], function () {
        
        
        });

*/
//testing route, ignore
Route::get('projects', 'ProjectController@index');
    Route::post('projects', 'ProjectController@store');
    Route::get('projects/{id}', 'ProjectController@show');
    Route::put('projects/{project}', 'ProjectController@markAsCompleted');
    Route::post('tasks', 'TaskController@store');
    Route::put('tasks/{task}', 'TaskController@markAsCompleted');
