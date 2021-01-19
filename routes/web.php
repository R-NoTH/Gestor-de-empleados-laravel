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
    return view('home');
});

Route::resource('employees', 'EmployeeController');
Route::get('employeesDataTable', 'EmployeeController@dataTable')->name('employeesDataTable');
Route::get('employeesDataTableCovid', 'EmployeeController@dataTableCovid')->name('employeesDataTableCovid');
Route::get('employeesIndexCovid', 'EmployeeController@indexCovid')->name('employeesIndexCovid');
Route::get('employeesIndexEnfermedadComun', 'EmployeeController@indexEnfermedadComun')->name('employeesIndexEnfermedadComun');
Route::get('employeesDataTableEnfermedadComun', 'EmployeeController@dataTableEnfermedadComun')->name('employeesDataTableEnfermedadComun');
Route::get('employeesDataTableAccidenteLaboral', 'EmployeeController@dataTableAccidenteLaboral')->name('employeesDataTableAccidenteLaboral');
Route::get('employeesIndexAccidentesLaboral', 'EmployeeController@indexAccidenteLaboral')->name('employeesIndexAccidentesLaboral');






// Route::delete('employees/{id}', 'EmployeeController@destroy');

Route::get('panelControl', function () {
    return view('panelControl.index');
});
