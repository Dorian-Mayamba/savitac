<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AddPartnerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EditPartnerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\MinesController;
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
Route::middleware('http')->group(function () {
    // --------------------------------------Basic Route---------------------------------------
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'about'])->name('about');
    Route::get('/partenaires', [PartnerController::class, 'showPartnerPage'])->name('partner');
    Route::get('/partenaires-json', [PartnerController::class, 'getPartners'])->name('partner-json');
    Route::get('/formations', [FormationController::class, 'showFormationPage'])->name('formations');
    Route::get('/contact', [ContactController::class, 'showContactPage'])->name('contact');
    Route::post('/contact', [ContactController::class, 'sendMessage']);
    Route::get('/missions', [MissionController::class, 'showMissionPage'])->name('missions');
    Route::get('/mines', [MinesController::class, 'index'])->name('mines');

    // ------------------------------------------Admin Route-----------------------------
    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'showDashboardPage'])->name('dashboard');
        Route::get('/admin/create', [AddPartnerController::class, 'showAddPartnerForm'])->name('partner-create');
        Route::post('/admin/create', [AddPartnerController::class, 'addPartner']);
        Route::put('admin/edit/{id}', [EditPartnerController::class, 'editPartner']);
    });
});