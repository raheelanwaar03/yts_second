<?php

use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;



Route::name('User.')->prefix('User')->middleware('user', 'auth')->group(function () {

    Route::get('/Dashboard', [UserDashboardController::class, 'dashboard'])->name('Dashboard');


});
