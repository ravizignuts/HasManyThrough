<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
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
Route::controller(mainController::class)->group(function(){
    Route::get('addproject','addProject');
    Route::get('addenvironment/{id}','addEnvironment');
    Route::get('adddeployment/{id}','addDeployment');
    Route::get('showdeployment/{id}','showDeployment');
});
