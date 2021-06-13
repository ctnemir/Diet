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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('forms', 'forms')->name('forms');
    Route::view('cards', 'cards')->name('cards');
    Route::view('charts', 'charts')->name('charts');
    Route::view('buttons', 'buttons')->name('buttons');
    Route::view('modals', 'modals')->name('modals');
    Route::view('tables', 'tables')->name('tables');
    Route::view('calendar', 'calendar')->name('calendar');

    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::resource('patient', \App\Http\Controllers\PatientController::class);
    Route::resource('disease', \App\Http\Controllers\DiseaseController::class);
    Route::resource('dietMethod', \App\Http\Controllers\DietMethodController::class);

    Route::any('/changeMethod',[\App\Http\Controllers\PatientController::class,'changeMethod']);
    Route::get('/print/{data}',function ($data){
       return "emir";
    });
});
