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

Route::middleware(['check_permission'])->group(function () {
    Auth::routes();
    Route::namespace('Front')->group(function () {
        //write your font-end routes
        Route::get('/', function () {
            return view('welcome');
        });
    });
    Route::namespace('Admin')->prefix('/admin')->group(function () {
        //write your back-end routes
        Route::get('/', 'HomeController@index')->name('home');

        // Roles routes.
        Route::get('/roles', 'RoleController@index')->name('admin.roles.index');
        Route::post('/roles', 'RoleController@store')->name('admin.roles.store');
        Route::get('/roles/{role}/edit', 'RoleController@edit')->name('admin.roles.edit');
        Route::post('/roles/{role}', 'RoleController@update')->name('admin.roles.update');
        Route::get('/roles/{role}/delete', 'RoleController@destroy')->name('admin.roles.delete');

        // Permissions routes.
        Route::get('/permissions', 'PermissionController@index')->name('admin.permissions.index');
        Route::post('/permissions', 'PermissionController@store')->name('admin.permissions.store');
    });
});
