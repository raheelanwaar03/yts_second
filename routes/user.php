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
    Route::get('/Get/Reward/{id}', [UserTaskController::class, 'index'])->name('Get.Task.Reward');
    // Spin routes
    Route::get('/Spin',[UserDashboardController::class,'spin'])->name('Spin');
    Route::get('/spin-wheel/{amount}',[UserDashboardController::class,'spinWheel'])->name('Spin.Wheel');
    Route::get('/Spin/Withdraw',[UserDashboardController::class,'spinWithdraw'])->name('Spin.Withdraw');
    Route::post('/Store/Spin/Withdraw',[UserDashboardController::class,'storeSpinWithdraw'])->name('Store.Spin.Withdraw');
    // promote Channel
    Route::get('Promote/Channel',[UserDashboardController::class,'promote'])->name('Promote.Channel');
    Route::post('/Success',[UserDashboardController::class,'success'])->name('Success');
    Route::get('/Setting',[UserDashboardController::class,'setting'])->name('Setting.Password');

});
