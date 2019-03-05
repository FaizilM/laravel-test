<?php

use Illuminate\Http\Request;

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
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: *');
// header('Access-Control-Allow-Headers: *');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => 'usersession'], function () {
   
    Route::get('/useradmin', "UserAdminController@index");
    Route::post('/useradmin', "UserAdminController@save");
    Route::post('/useradmin/findByUsername', "UserAdminController@findByUsername");


    Route::get('/reseller', "ResellerListController@index");
    Route::post('/reseller', "ResellerListController@save");
    Route::post('/reseller/{id}',"ResellerListController@edit");
    Route::delete('/reseller/{id}', "ResellerListController@delete");
    Route::put('/reseller',"ResellerListController@update");
    Route::put('/reseller/updateStatus',"ResellerListController@updateStatus");
// });

    // Route::post('/upload/file' , "TemplateUploadController@saveFile");
    Route::post('/upload/file', "TemplateUploadController@upload");
    // Route::post('/store' , "TemplateUploadController@store");
    // header('Access-Control-Allow-Origin: *');
    // header('Access-Control-Allow-Methods: *');
    // header('Access-Control-Allow-Headers: *');
   


    /**
    * Route for StudentController
    */
    Route::get('/student', "StudentController@index");
    Route::post('/student', "StudentController@save");

    /**
    * Route for UserAdminController
    */
    // Route::get('/useradmin', "UserAdminController@index");
    // Route::post('/useradmin', "UserAdminController@save");
    // Route::post('/useradmin/findByUsername', "UserAdminController@findByUsername");
    
    /**
    * Route for ResellerListController
    */
    // Route::get('/reseller', "ResellerListController@index");
    // Route::post('/reseller', "ResellerListController@save");
    // Route::post('/reseller/{id}',"ResellerListController@edit");
    // Route::delete('/reseller/{id}', "ResellerListController@delete");
    // Route::put('/reseller',"ResellerListController@update");
    // Route::put('/reseller/updateStatus',"ResellerListController@updateStatus");