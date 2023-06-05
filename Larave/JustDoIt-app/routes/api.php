<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoneController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\HiController;
use App\Http\Controllers\PhonesController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('Test',[TestController::class ,'Test']);
Route::get('Test', [TestController::class, 'Test']);

Route::post('phones',[PhonesController::class, 'create']);
Route::get('phones',[PhonesController::class, 'create']);

Route::prefix('student')->name('student')->controller(StudentController::class)->group(function () 
{
    Route::get('', 'index');
    Route::post('', 'store');
    //Route::post('purchase', 'credit_wallet');
    Route::post('{student}', 'update');
    Route::get('{student}', 'show');
    Route::delete('{student}', 'destroy');
});

Route::prefix('staff')->name('staff')->controller(StaffController::class)->group(function ()
{
 Route::get('', 'index');
 Route::post('','store');
 Route::post('{staff}', 'update');
 Route::get('{staff}', 'show');
 Route::delete('{staff}', 'destroy');
});

Route::prefix('department')->name('department')->controller(DepartmentController::class)->group(function(){
  Route::get('', 'index');
  Route::post('','store');
  Route::post('{department}','update');
  Route::get('{department}','show');
  Route::delete('{department}','destroy');
});

Route::prefix('grade')->name('grade')->controller(GradeController::class)->group(function ()
{
 Route::get('','index');
 Route::post('','store');
 Route::get('{grade}','show');
 Route::post('{grade}','update');
 Route::delete('{grade}','destroy');
});

Route::prefix('done')->name('done')->controller(DoneController::class)->group(function ()
{
  Route::get('','index');
  Route::post('','store');
  Route::get('{done}','show');
  Route::post('{done}','update');
  Route::delete('{done}','destroy');
});

Route::prefix('hi')->name('hi')->controller(HiController::class)->group(function ()
{
  Route::get('','index');
  Route::post('','store');
  Route::post('{hi}','update');
  Route::get('{hi}','show');
  Route::delete('{hi}','destroy');
});