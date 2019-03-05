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

Route::get('/student', "StudentController@indexWeb");
Route::get('/employee', "EmployeeController@list");
Route::get('/resellerlist',"ResellerListController@list");
Route::get('/useradmin', "UserAdminController@list");


