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
Route::get('/graduats/count/{id}', [ApiController::class, 'getGraduatsPag']);
Route::get('/nams', [ApiController::class, 'getnams']);
Route::get('/nams/{id}', [ApiController::class, 'getOneNews']);
Route::get('/nams/count/{id}', [ApiController::class, 'getNewsPag']);
Route::get('/facts', [ApiController::class, 'getfacts']);
Route::get('/facults', [ApiController::class, 'getfacults']);
Route::get('/congratulations', [ApiController::class, 'getcongratulations']);
Route::get('/rectorats', [ApiController::class, 'getrectorats']);
Route::get('/rectorats/count/{id}', [ApiController::class, 'getRektoratsPag']);
Route::get('/receptions', [ApiController::class, 'getReception']);
Route::get('/charters', [ApiController::class, 'getcharters']);
Route::get('/architecturals', [ApiController::class, 'getarchitecturals']);
Route::get('/interactivservs', [ApiController::class, 'getinteractivservs']);
Route::get('/sliders', [ApiController::class, 'getsliders']);
Route::get('/sliders/{id}', [ApiController::class, 'getOneSliders']);
Route::get('/histors', [ApiController::class, 'gethistors']);

Route::post('/add/receptions', [ApiController::class, 'postReception']);