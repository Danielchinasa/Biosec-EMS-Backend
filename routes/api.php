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

Route::group(['prefix' => 'v1/auth'], function(){
    Route::post('login', 'API\Auth\AuthController@login');
    Route::post('signup', 'API\Auth\AuthController@signup');
}); 

// Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () {
//     Route::get('user', 'API\Auth\AuthController@user');
   
   
// });
Route::get('employee-list', 'API\EmployeeController@allEmployee');
Route::post('employee-create', 'API\EmployeeController@create');
Route::get('employee/{id}', 'API\EmployeeController@getEmployee');
Route::post('employee/{id}/update', 'API\EmployeeController@updateEmployee');
Route::get('employee/{id}/archive', 'API\EmployeeController@archiveEmployee');
Route::get('employee-archive-list', 'API\ArchiveController@allArchivedEmployee');
Route::get('system-logs', 'API\LogsController@allLogs');
