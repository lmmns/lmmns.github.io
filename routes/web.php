<?php

use App\Http\Controllers\ResumeController;
use App\Http\Controllers\Forge\ServerController;
use App\Http\Controllers\Forge\SitesController;
use Illuminate\Support\Facades\Route;

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

Route::domain(domain())->group(function () {
    Route::view('/', 'home');
});

Route::domain('forge.' . domain())->group(function () {
    Route::get('servers', [ ServerController::class, 'index' ]);
    Route::get('servers/{server}/sites', [ SitesController::class, 'index' ]);
});

// Route::domain('resume.' . domain())->group(function () {
//     Route::view('/', 'resume.index')->name('resume');
//     Route::get('pdf', [ ResumeController::class, 'pdf' ]);
// });
