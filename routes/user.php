<?php

use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserTaskController;
use App\Http\Controllers\user\WithdrawController;
use Illuminate\Support\Facades\Route;



Route::name('User.')->prefix('User')->middleware('user', 'auth', 'fees')->group(function () {

    Route::get('/Dashboard', [UserDashboardController::class, 'dashboard'])->name('Dashboard');
    Route::get('/Team', [UserDashboardController::class, 'team'])->name('Team');
    Route::get('/Referral', [UserDashboardController::class, 'link'])->name('Referral.Link');
    Route::get('/Plan', [UserDashboardController::class, 'plan'])->name('Plan.Details');
    Route::get('/Contact', [UserDashboardController::class, 'contact'])->name('Contact');
    // Withdraw routes
    Route::get('/Withdraw', [WithdrawController::class, 'withdraw'])->name('Withdraw');
    Route::get('/Withdraw/History', [WithdrawController::class, 'withdraw_history'])->name('Withdraw.History');
    Route::post('/Store/Withdraw', [WithdrawController::class, 'store_withdraw'])->name('Store.Withdraw');
    // task and reward
    Route::get('/All/Tasks', [UserTaskController::class, 'all_tasks'])->name('All.Tasks');
    Route::get('/Get/Reward/{id}', [UserTaskController::class, 'get_reward'])->name('Get.Task.Reward');
});
