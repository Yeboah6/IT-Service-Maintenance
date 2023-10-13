<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('auth.register');
});

// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user-dashboard', [DashboardController::class, 'userDashboard'])->middleware(['auth', 'verified'])->name('user-dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Incident Routes
    Route::get('/create-incident', [IncidentController::class, 'create'])->name('create-incident');
    Route::post('/create-incident', [IncidentController::class, 'store'])->name('create-incident');

    // Assign Routes
    Route::get('/assign-incident', [IncidentController::class, 'viewAssign'])->name('assign-incident');
    Route::get('/assign-to', [IncidentController::class, 'assigneTo'])->name('assign-to');

    Route::get('/report', [IncidentController::class, 'report'])->name('report');
    Route::get('/users', [IncidentController::class, 'viewusers'])->name('users');
});

require __DIR__.'/auth.php';
