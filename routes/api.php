<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\StudentsController;


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

Route::post('login', [UsersController::class, 'login']);
Route::post('register', [UsersController::class, 'register']);
Route::post('studentregister', [UsersController::class, 'studentregister']);
Route::get('getstudents', [StudentsController::class, 'getStudents']);
Route::get('get-all-posts', [StudentsController::class, 'getAllPosts']);

Route::post('reset-password', [UsersController::class, 'resetPassword']);