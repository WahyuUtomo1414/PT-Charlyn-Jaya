<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/tentang-kami', AboutController::class)->name('about');

Route::get('/struktur-organisasi', OrganizationController::class)->name('organization');

Route::get('/project-jasa', [ProjectController::class, 'index'])->name('project');
Route::get('/project-jasa/{slug}', [ProjectController::class, 'show'])->name('project.show');
