<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;

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

Route::get('/', [PortalController::class, 'index'])->name('/');
Route::get('/software', [PortalController::class, 'software'])->name('software');
Route::get('/marketing', [PortalController::class, 'marketing'])->name('marketing');
Route::get('/about_us', [PortalController::class, 'about_us'])->name('about_us');
Route::get('/contact_us', [PortalController::class, 'contact_us'])->name('contact_us');
