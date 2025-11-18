<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\MenuItemController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/teszt", function(){

    return "Saját végpont";

});


Route::get("/foods", [MenuItemController::class, "getFoods"]);
Route::get("/foods", [MenuItemController::class, "getFoods"]);
Route::get("/testfoods", [MenuItemController::class, "food"]);
