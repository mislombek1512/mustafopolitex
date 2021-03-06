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
Route::get('/centers', [ApiController::class, 'getcenters']);
Route::get('/centerabouts', [ApiController::class, 'getcenterabouts']);
Route::get('/departments', [ApiController::class, 'getdepartments']);
Route::get('/departmentabouts', [ApiController::class, 'getdepartmentabouts']);
Route::get('/facultydirectors', [ApiController::class, 'getfacultydirectors']);
Route::get('/facultymembers', [ApiController::class, 'getfacultymembers']);
Route::get('/facultyabouts', [ApiController::class, 'getfacultyabouts']);
Route::get('/kafedramens', [ApiController::class, 'getkafedramens']);
Route::get('/kafedradirectors', [ApiController::class, 'getkafedradirectors']);
Route::get('/kafedraabouts', [ApiController::class, 'getkafedraabouts']);
Route::get('/kafedraworkers', [ApiController::class, 'getkafedraworkers']);
Route::get('/filials', [ApiController::class, 'getfilials']);
Route::get('/filialdirectors', [ApiController::class, 'getfilialdirectors']);
Route::get('/filialabouts', [ApiController::class, 'getfilialabouts']);
Route::get('/applicantmens', [ApiController::class, 'getapplicantmens']);
Route::get('/uniquelinks', [ApiController::class, 'getuniquelinks']);
Route::get('/corruptionsectors/{corruptionmen}', [ApiController::class, 'getcorruptionsectors']);
Route::get('/corruptionmens', [ApiController::class, 'getcorruptionmens']);

Route::post('/add/receptions', [ApiController::class, 'postReception']);
Route::get('/masterylessons', [ApiController::class, 'getmasterylessons']);
Route::get('/techniqs', [ApiController::class, 'gettechniqs']);
Route::get('/fans', [ApiController::class, 'getfans']);
Route::get('/inovations', [ApiController::class, 'getinovations']);
Route::get('/doctorals', [ApiController::class, 'getdoctorals']);
Route::get('/finances', [ApiController::class, 'getfinances']);
Route::get('/youngs', [ApiController::class, 'getyoungs']);
Route::get('/culturals', [ApiController::class, 'getculturals']);
Route::get('/creatives', [ApiController::class, 'getcreatives']);
Route::get('/erasmus', [ApiController::class, 'geterasmus']);
Route::get('/mechauzs', [ApiController::class, 'getmechauzs']);
Route::get('/spaces', [ApiController::class, 'getspaces']);
Route::get('/raqamlis', [ApiController::class, 'getraqamlis']);
Route::get('/mixtures', [ApiController::class, 'getmixtures']);
Route::get('/lowyerpartners', [ApiController::class, 'getlowyerpartners']);
Route::get('/partners', [ApiController::class, 'getlpartners']);
