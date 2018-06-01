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
    return view('welcome');
});

Route::get('personalData', 'InsuranceWizard@personalDataForm');
Route::get('detailedInfo/{id}', 'InsuranceWizard@detailedInfoForm');
Route::get('driverDetails/{id}', 'InsuranceWizard@driverDetailsForm');
Route::get('addCarForm/{id}', 'InsuranceWizard@addCarForm');
Route::get('endForm/{id}', 'InsuranceWizard@endForm');

Route::post('personalDataStore', 'InsuranceWizard@personalDataStore');
Route::post('detailedInfoStore', 'InsuranceWizard@detailedInfoStore');
Route::post('driverDetailsStore', 'InsuranceWizard@driverDetailsStore');
Route::post('addCarStore', 'InsuranceWizard@addCarStore');
