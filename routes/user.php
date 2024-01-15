<?php

use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;



Route::name('User.')->prefix('User')->middleware('user', 'auth', 'fees')->group(function () {

    Route::get('/Dashboard', [UserDashboardController::class, 'dashboard'])->name('Dashboard');
    Route::get('/Team', [UserDashboardController::class, 'team'])->name('Team');
    Route::get('/Withdraw', [UserDashboardController::class, 'withdraw'])->name('Withdraw');
    Route::get('/Withdraw/History', [UserDashboardController::class, 'withdraw_history'])->name('Withdraw.History');
    Route::post('/Store/Withdraw', [UserDashboardController::class, 'store_withdraw'])->name('Store.Withdraw');
});
