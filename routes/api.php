<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/contacts', [ApiController::class, 'getcontact']);
Route::get('/bussins', [ApiController::class, 'getbussins']);
Route::get('/studentmens', [ApiController::class, 'getstudentmens']);
Route::get('/students', [ApiController::class, 'getstudents']);
Route::get('/bachelors', [ApiController::class, 'getbachelors']);
Route::get('/graduats', [ApiController::class, 'getgraduats']);
Route::get('/nams', [ApiController::class, 'getnams']);
Route::get('/nams/{id}', [ApiController::class, 'getOneNews']);
Route::get('/facts', [ApiController::class, 'getfacts']);
Route::get('/congratulations', [ApiController::class, 'getcongratulations']);
Route::get('/rectorats', [ApiController::class, 'getrectorats']);
Route::get('/receptions', [ApiController::class, 'getReception']);
Route::post('/add/receptions', [ApiController::class, 'postReception']);