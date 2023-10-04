<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [IncidentController::class, 'index']) -> name('dashboard');
Route::get('/create-incident', [IncidentController::class, 'create']) ->name('create-incident');
Route::get('/view-incident', [IncidentController::class, 'view']) ->name('view-incident');
Route::get('/view-users', [IncidentController::class, 'showUsers']) ->name('view-users');
Route::get('/user-dashboard', [IncidentController::class, 'userDashboard']) ->name('user-dashboard');


Route::get('/register', [AuthController::class, 'show']) ->name('register');
Route::post('/register', [AuthController::class, 'store']) ->name('register');

Route::get('/login', [AuthController::class, 'showLogin']) ->name('login');