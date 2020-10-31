<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\InspirationController;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('manifesto', [PageController::class, 'manifesto'])->name('manifesto');
Route::get('team', [PageController::class, 'team'])->name('team');
Route::get('portfolio', [ProjectController::class, 'index'])->name('portfolio');
Route::get('portfolio/{projectSlug}', [ProjectController::class, 'view'])->name('project');
Route::get('inspiratie', [InspirationController::class, 'index'])->name('inspiration');
Route::get('experiment', [PageController::class, 'experiment'])->name('experiment');
