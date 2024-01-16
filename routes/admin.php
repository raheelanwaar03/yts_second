<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\TaskController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin')->middleware('admin','auth')->group(function(){

    Route::get('/Dashboard',[AdminDashboardController::class,'dashboard'])->name('Dashboard');
    // task
    // Route::post('/Store/Task',[TaskController::class,'store_task'])->name('Store.Task');

});
