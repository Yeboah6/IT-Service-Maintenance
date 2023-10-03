<?php

use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\IncidentController;

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
