<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\technicianController;
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

Route::get('/', function () {
    return view('auth.register');
});

// Route::get('/dashboard', function () {
//     return view('Dashboards.Admin.dashboard');
// })

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Incident Routes
    Route::get('/create-incident', [IncidentController::class, 'create'])->name('create-incident');
    Route::post('/create-incident', [IncidentController::class, 'store'])->name('create-incident');
    Route::get('/pending-incident', [IncidentController::class, 'pending'])->name('pending-incident');
    Route::get('/resolved-incident', [IncidentController::class, 'resolved'])->name('resolved-incident');

    // User Incident Routes
    Route::get('/user-pending', [IncidentController::class, 'userPending'])->name('user-pending');
    Route::get('/user-resolved', [IncidentController::class, 'userResolved'])->name('user-resolved');


    // StatusCheck Route (Pending to Resolved)
    Route::post('/resolve-incident/{id}', [IncidentController::class, 'pendingToDone'])->name('resolve-incident');

    // Assign Routes
    Route::get('/assign-to/{id}', [IncidentController::class, 'assignTo'])->name('assign-to');
    Route::post('/assign-to/{id}', [IncidentController::class, 'assign'])->name('assign-to');
    Route::get('/assign-incident', [IncidentController::class, 'viewAssign'])->name('assign-incident');

    // Technician Routes
    Route::get('/technicians', [technicianController::class, 'technician']) -> name('technicians');
    Route::get('/add-technicians', [technicianController::class, 'addTechnician']) -> name('add-technicians');
    Route::post('/add-technicians', [technicianController::class, 'addTechnicians']) -> name('add-technicians');

    // View More Route
    Route::get('/view-more/{id}', [IncidentController::class, 'viewMore']) -> name('view-more');
    // Route::get('/view-more', [IncidentController::class, 'viewMore']) -> name('view-more');

    Route::get('/report', [IncidentController::class, 'report'])->name('report');
    // Route::get('/report-search', [IncidentController::class, 'reportSearch'])->name('report-search');
    Route::get('/users', [IncidentController::class, 'viewusers'])->name('users');

    // Department Routes
    Route::get('/department', [IncidentController::class, 'department']) -> name('department');
    Route::get('/add-department', [IncidentController::class, 'addDepartment']) -> name('add-department');
    Route::post('/add-department', [IncidentController::class, 'addDepartments']) -> name('add-department');

    // Delete Routes
    Route::get('/delete/{id}', [IncidentController::class, 'delete']) -> name('delete');
    Route::get('/delete-user/{id}', [IncidentController::class, 'deleteUser']) -> name('delete-user');
    Route::get('/delete-technician/{id}', [technicianController::class, 'deleteTechnician']) -> name('delete-technician');

    Route::get('/display-search', [IncidentController::class, 'searchDisplay']) -> name('display-search');
});

require __DIR__.'/auth.php';
