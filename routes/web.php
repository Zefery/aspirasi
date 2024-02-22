<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AspirasiController;
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
//     return view('admin');
// });

Route::get('/', [AspirasiController::class, 'index']);
Route::get('/foto-sekolah', [AspirasiController::class, 'foto']);
Route::get('/admin-tampilan', [AspirasiController::class, 'admin_tampilan']);
Route::get('/admin', [AspirasiController::class, 'admin']);

Route::post('/aspirasi/add', [AspirasiController::class, 'add']);

Route::get('/aspirasi/status/{id}', [AspirasiController::class, 'status']);
Route::get('/aspirasi/delete/{id}', [AspirasiController::class, 'delete']);

Route::get('/aspirasi/search', [AspirasiController::class, 'search']);
Route::get('/admin-tampilan/search', [AdminController::class, 'search']);

Route::post('/admin/login', [adminController::class, 'login']);
