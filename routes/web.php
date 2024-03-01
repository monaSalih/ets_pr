<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TraineeController;
use App\Models\Trainee;
use App\Http\Middleware\CheckUserRole;
use Illuminate\Support\Facades\Auth;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
})->name('login');


Route::get('/home', [DashboardController::class,'jobcoachDashboard']);


Auth::routes();

//Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/employment-status', [TraineeController::class, 'index']);
    Route::get('/employment-status/{id}/edit', [TraineeController::class, 'edit'])->name('employment-status.edit');
    Route::put('/employment-status/{id}/update', [TraineeController::class, 'update'])->name('employment-status.update');
    Route::get('/employment-status/{id}/destroy', [TraineeController::class, 'destroy'])->name('employment-status.destroy');


    Route::get('/employment-status/{id}/logs', [TraineeController::class, 'logs'])->name('employment-status.logs');
    Route::get('/employment-status/{id}/logs/create', [TraineeController::class, 'createLog'])->name('employment-status.logs.create');
    Route::post('/employment-status/{id}/logs', [TraineeController::class, 'storeLog'])->name('employment-status.logs.store');
    Route::delete('/employment-status/{traineeId}/logs/{logId}/destroy', [TraineeController::class, 'destroyLog'])->name('employment-status.logs.destroy');
    Route::get('/trainees/{cohort_id}', [TraineeController::class, 'index'])->name('trainees.index');
    // view all trainees based academy_id & cohort_id
    Route::get('/trainees/{academy_id}/{cohort_id}', [TraineeController::class, 'index'])->name('trainees.index'); 
    // view all trainess how have internshipe based academy_id & cohort_id
    Route::get('/traineLog/{academy_id}/{cohort_id}', [TraineeController::class, 'traineeLog'])->name('traineeLog.index');
//});

















