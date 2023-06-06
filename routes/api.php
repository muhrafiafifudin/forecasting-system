<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Department
Route::group(['prefix' => 'departments', 'as' => 'department.'], function () {
    Route::get('/', 'App\Http\Controllers\Api\DepartmentController@index')->name('index');
});

Route::group(['middleware' => 'auth'], function () {
    // Unit
    Route::group(['prefix' => 'unit', 'as' => 'unit.'], function () {
        Route::get('/', 'App\Http\Controllers\Api\UnitController@index')->name('index');
    });
    // Position
    Route::group(['prefix' => 'jabatan', 'as' => 'position.'], function () {
        Route::get('/', 'App\Http\Controllers\Api\PositionController@index')->name('index');
    });
    // Employrr
    Route::group(['prefix' => 'karyawan', 'as' => 'employee.'], function () {
        Route::get('/', 'App\Http\Controllers\Api\EmployeeController@index')->name('index');
    });
});
