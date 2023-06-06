<?php

use Illuminate\Support\Facades\Route;

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

require __DIR__ . '/auth.php';

// Route::get('/', function () {
//     return view('pages.auth.login');
// });

Route::get('/', function () {
    if (Auth::user()) {
        return redirect()->route('dashboard');
    }
    return view('pages.auth.login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    // Department
    Route::group(['prefix' => 'departemen', 'as' => 'department.'], function () {
        Route::get('/', 'App\Http\Controllers\Main\DepartmentController@index')->name('index');
    });
    // Unit
    Route::group(['prefix' => 'unit', 'as' => 'unit.'], function () {
        Route::get('/', 'App\Http\Controllers\Main\UnitController@index')->name('index');
    });
    // Position
    Route::group(['prefix' => 'jabatan', 'as' => 'position.'], function () {
        Route::get('/', 'App\Http\Controllers\Main\PositionController@index')->name('index');
    });
    // Employrr
    Route::group(['prefix' => 'karyawan', 'as' => 'employee.'], function () {
        Route::get('/', 'App\Http\Controllers\Main\EmployeeController@index')->name('index');
    });
});
