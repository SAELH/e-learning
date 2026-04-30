<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElearningController;
use App\Http\Controllers\DashboardController;

Route::get('/',[ElearningController::class,'get_courses'])->name('courses');
Route::post('/store_employee',[DashboardController::class,'store_employee'])->name('store_employee');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard',function(){return view('dashboard.index');})->name('dashboard');
    Route::get('/dashboard/courses',[DashboardController::class,'get_courses'])->name('dashboard.courses');
    Route::get('/dashboard/assignments',[DashboardController::class,'get_assignments'])->name('dashboard.assignments');

    // Manpluate Course
    Route::post('/add_course',[DashboardController::class,'add_course'])->name('add_course');
    Route::get('/delete_course/{id}',[DashboardController::class,'delete_course'])->name('delete_course');
    Route::get('/edit_course/{id}',[DashboardController::class,'edit_course'])->name('edit_course');
    Route::post('/update_coruse/{id}',[DashboardController::class,'update_course'])->name('update_course');
});


