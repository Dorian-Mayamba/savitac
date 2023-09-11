<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\PartnerController;
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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// --------------------------------------Basic Route---------------------------------------


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/partenaires', [PartnerController::class, 'showPartnerPage'])->name('partner');
Route::get('/formations', [FormationController::class, 'showFormationPage'])->name('formations');
Route::get('/contact', [ContactController::class, 'showContactPage'])->name('contact');
Route::get('/missions', [MissionController::class, 'showMissionPage'])->name('missions');


