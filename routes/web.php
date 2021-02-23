<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\HomeController;

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
Route::get('owners', [OwnerController::class, "index"]);
Route::get('/', [HomeController::class, "index"]);



    Route::group(["prefix" => "owners"], function () {
    // add *above* route with URL parameter
    // otherwise 'create' will get included in that
        Route::get('create', [OwnerController::class, "create"]); //http://192.168.10.10/owners/create
        Route::post('create', [OwnerController::class, "createPost"]);
        Route::get('{owner}', [OwnerController::class, "show"]); //http://192.168.10.10/owners/1

    });
