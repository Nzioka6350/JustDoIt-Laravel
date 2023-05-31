<?php

use App\Http\Controllers\DepartmentController;
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
  Route::post('{depsrtment}','update');
  Route::get('{department}','show');
  Route::delete('{department}','destroy');
});