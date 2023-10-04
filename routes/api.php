<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {

    Route::get('/', [UserController::class, 'projectsIndex']);

    Route::get('/projects/{id}', [UserController::class, 'projectShow']);

    Route::get('/types', [UserController::class, 'getTypes']);
    Route::get('/technologies', [UserController::class, 'getTechnologies']);
});
