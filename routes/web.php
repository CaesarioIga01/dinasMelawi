<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/login', 'Admin\LoginController@getLogin')->name('login');
Route::post('/', 'Admin\LoginController@postLogin')->name('login');

// Route::get('/home', function () {
//     return dd(Auth::user());
// })->name('home');


// Route::prefix('admin')
//     ->namespace('Admin')
//     ->group(function () {
//         route::get('/', 'DashboardController@index')
//             ->name('dashboard');

//         // Route::resource('data-karyawan', 'DataKaryawanController');
//         route::resource('data-karyawan', 'DataKaryawanController');
//         route::get('progress-kerja', 'ProgressKerjaController@index')->name('progress');
//         route::resource('absen-karyawan', 'AbsenKaryawanController');
//         route::delete('data-karyawan/delete/{id}', 'DataKaryawanController@destroy');
//     });

// Route::group(['middleware' => 'auth'], function () {
   
// });
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        route::get('/', 'DashboardController@index')
            ->name('dashboard');

        route::resource('data-karyawan', 'DataKaryawanController');
        route::get('progress-kerja', 'ProgressKerjaController@index')->name('progress');
        route::resource('absen-karyawan', 'AbsenKaryawanController');
        // route::delete('data-karyawan/delete/{id}', 'DataKaryawanController@destroy');
    });
