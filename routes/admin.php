<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminWithdrawController;
use App\Http\Controllers\admin\TaskController;
use App\Http\Controllers\admin\UserStatusController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin')->middleware('admin', 'auth')->group(function () {

    Route::get('/Dashboard', [AdminDashboardController::class, 'dashboard'])->name('Dashboard');
    Route::get('/Pending/Users', [AdminDashboardController::class, 'pending_users'])->name('Pending.Users');
    Route::get('/Approved/Users', [AdminDashboardController::class, 'approved_users'])->name('Approved.Users');
    Route::get('/Rejected/Users', [AdminDashboardController::class, 'rejected_users'])->name('Rejected.Users');
    Route::get('/Todays/Users', [AdminDashboardController::class, 'today_users'])->name('Todays.Users');
    // Change user status
    Route::get('/Make/User/Approve/{id}', [UserStatusController::class, 'approve_user'])->name('Make.User.Approve');
    Route::get('/Make/User/Rejected/{id}', [UserStatusController::class, 'rejected_user'])->name('Make.User.Rejected');
    Route::get('/Make/User/Pending/{id}', [UserStatusController::class, 'pending_user'])->name('Make.User.Pending');
    // task
    Route::get('/Add/Task',[TaskController::class,'add_task'])->name('Add.Task');
    Route::post('/Store/Task',[TaskController::class,'store_task'])->name('Store.Task');
    // Withdraw Routes
    Route::get('/Pending/Withdraw', [AdminWithdrawController::class, 'pending_withdraw'])->name('Withdraw.Pending.Requests');
    Route::get('/Approved/Withdraw', [AdminWithdrawController::class, 'approved_withdraw'])->name('Withdraw.Approved.Requests');
    Route::get('/Rejected/Withdraw', [AdminWithdrawController::class, 'rejected_withdraw'])->name('Withdraw.Rejected.Requests');
    Route::get('/Make/Approved/Withdraw/{id}', [AdminWithdrawController::class, 'make_approve'])->name('Make.Withdraw.Approve');
    Route::get('/Make/Pending/Withdraw/{id}', [AdminWithdrawController::class, 'make_pending'])->name('Make.Withdraw.Pending');
    Route::get('/Make/Reject/Withdraw/{id}', [AdminWithdrawController::class, 'make_reject'])->name('Make.Withdraw.Reject');
});
