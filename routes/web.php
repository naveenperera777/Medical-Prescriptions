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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Prescriptions', 'PrescriptionController@getPrescription')->name('get-medical-prescription');

Route::post('/Prescriptions', 'PrescriptionController@storePrescriptions')->name('get-medical-prescription');


Route::get('/Prescriptions/{id}', 'PrescriptionController@generatePrescription')->name('generate-prescription');


// Route::get( '/student/store-medical/generate-medical/{id}', 'StudentController@generateMedicalPDF' )->name( 'generate-medical' );