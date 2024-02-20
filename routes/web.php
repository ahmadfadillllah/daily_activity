<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DailyActivityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/post', [AuthController::class, 'login_post'])->name('login_post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth', 'checkRole:admin,guest']], function(){

    Route::get('/unit', [UnitController::class, 'index'])->name('unit.index');

    Route::get('/daily-activity', [DailyActivityController::class, 'index'])->name('dailyactivity.index');
    Route::post('/daily-activity/insert', [DailyActivityController::class, 'insert'])->name('dailyactivity.insert');

});
