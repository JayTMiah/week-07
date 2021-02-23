<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OwnerController;
use App\Http\Requests\API\OwnerRequest;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


# use array syntax to point to controller
# tidier and harder to make typos
Route::get("/owners", [OwnerController::class, "index"]);

// use the API controller

// all of the routes are in the /owners end-point
Route::group(["prefix" => "owners"], function () {
    // GET /owners: show all owners
    Route::get("", [OwnerController::class, "index"]);

    // POST /owners: create a new owner
    Route::post("", [OwnerController::class, "store"]);

    // all these routes also have an owner ID in the
    // end-point, e.g. /owners/8
    Route::group(["prefix" => "{owner}"], function () {
        // GET /owners/8: show the owner
        Route::get("", [OwnerController::class, "show"]);

        // PUT /owners/8: update the owner
        Route::put("", [OwnerController::class, "update"]);

        // DELETE /owners/8: delete the owner
        Route::delete("", [OwnerController::class, "destroy"]);
    });
});