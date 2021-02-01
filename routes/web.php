<?php

use App\Http\Controllers\EmployeeController;
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
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'admin'], function () {
    
    Route::resource('employees', 'EmployeeController');

    // Route::delete('/admin/usertable/deleteuser', 'EmployeeController@destroy')->name('admin.deleteuser');
    Route::post('delete-employee', [EmployeeController::class, 'destroy']);
    Route::get('employeesDataTable', 'EmployeeController@dataTable')->name('employeesDataTable');
    Route::get('employeesDataTableCovid', 'EmployeeController@dataTableCovid')->name('employeesDataTableCovid');
    Route::get('employeesIndexCovid', 'EmployeeController@indexCovid')->name('employeesIndexCovid');

    Route::get('employeesIndexEnfermedadComun', 'EmployeeController@indexEnfermedadComun')->name('employeesIndexEnfermedadComun');
    Route::get('employeesDataTableEnfermedadComun', 'EmployeeController@dataTableEnfermedadComun')->name('employeesDataTableEnfermedadComun');

    Route::get('employeesDataTableAccidenteLaboral', 'EmployeeController@dataTableAccidenteLaboral')->name('employeesDataTableAccidenteLaboral');
    Route::get('employeesIndexAccidentesLaboral', 'EmployeeController@indexAccidenteLaboral')->name('employeesIndexAccidentesLaboral');

    Route::get('employeesDataTablePatologiaEspecial', 'EmployeeController@dataTablePatologiaEspecial')->name('employeesDataTablePatologiaEspecial');
    Route::get('employeesIndexPatologiaEspecial', 'EmployeeController@indexPatologiaEspecial')->name('employeesIndexPatologiaEspecial');

    Route::get('employeesDataTableEnfermedadlaboralArl', 'EmployeeController@dataTableEnfermedadlaboralArl')->name('employeesDataTableEnfermedadlaboralArl');
    Route::get('employeesIndexEnfermedadlaboralArl', 'EmployeeController@indexEnfermedadlaboralArl')->name('employeesIndexEnfermedadlaboralArl');
});

