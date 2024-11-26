<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;

// projects related api routes
Route::get("/projects", [ProjectController::class, "index"]);
Route::get("/projects/{id}", [ProjectController::class, "show"]);
Route::post("/projects", [ProjectController::class, "store"]);
Route::put("/projects/{id}", [ProjectController::class, "update"]);
Route::delete("/projects/{id}", [ProjectController::class, "destroy"]);


// employees related api routes
Route::get("/employees/{id}", [EmployeeController::class, "show"]);
Route::post("/employees", [EmployeeController::class, "store"]);
Route::put("/employees/{id}", [EmployeeController::class, "update"]);
Route::delete("/employees/{id}", [EmployeeController::class, "destroy"]);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

