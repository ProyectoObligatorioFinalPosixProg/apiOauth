<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::prefix('v1')->group(function ()
{
    Route::get("/user",[UserController::class,'listUser']);
    Route::get("/user/{id}",[UserController::class,'findUser']);
    Route::post('/user',[UserController::class,"Register"]);
    Route::put("/user/{id}",[UserController::class,'modifyUser']);
    Route::delete("/user/{id}",[UserController::class,'deleteUser']);
    Route::get('/validate',[UserController::class,"ValidateToken"])->middleware('auth:api');
    Route::get('/logout',[UserController::class,"Logout"])->middleware('auth:api');


});