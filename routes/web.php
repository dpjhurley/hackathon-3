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


Route::get('/pets', 'PetController@index')->name('pets.index');
Route::get('/pets/{pet_id}', 'PetController@show')->where('pet_id','[0-9]+')->name('pet_id');
Route::post('/pets', 'PetController@index');




Route::get('/owners', 'OwnerController@index')->name('owners.index');
Route::get('/owners/{id}', 'OwnerController@show')->where('id','[0-9]+')->name('owner_id');
Route::post('/owners', 'OwnerController@index')->name('owners.index');

Route::get('/doctor', 'DoctorController@index')->name('doctor.index');

Route::get('/species', 'SpeciesController@index')->name('species.index');
