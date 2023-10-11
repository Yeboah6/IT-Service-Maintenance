<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IncidentController;
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
Route::get('/dashboard', function () {
    return view('Dashboards.Admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('Dashboards.User.user-dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Incident Routes
    Route::get('/create-incident', [IncidentController::class, 'create'])->name('create-incident');
    Route::get('/view-incident', [IncidentController::class, 'viewIncident'])->name('view-incident');
    Route::get('/report', [IncidentController::class, 'report'])->name('report');
    Route::get('/users', [IncidentController::class, 'viewusers'])->name('users');
});

require __DIR__.'/auth.php';
