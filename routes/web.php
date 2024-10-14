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
Route::get('/service', [PortalController::class, 'software'])->name('service');
Route::get('/marketing', [PortalController::class, 'marketing'])->name('marketing');
Route::get('/about_us', [PortalController::class, 'about_us'])->name('about_us');
Route::get('/contact_us', [PortalController::class, 'contact_us'])->name('contact_us');
Route::get('/why_us', [PortalController::class, 'why_us'])->name('why_us');
Route::get('/partner', [PortalController::class, 'partner'])->name('partner');
Route::get('/terms_and_conditions', [PortalController::class, 'terms_and_conditions'])->name('terms_and_conditions');
Route::get('/privacy_policy', [PortalController::class, 'privacy_policy'])->name('privacy_policy');
Route::post('/sendManualEmail', [PortalController::class, 'sendManualEmail'])->name('sendManualEmail');

