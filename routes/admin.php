<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminSettingcontroller;
use App\Http\Controllers\admin\AdminWithdrawController;
use App\Http\Controllers\admin\TaskController;
use App\Http\Controllers\admin\UserStatusController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin')->middleware('admin', 'auth')->group(function () {

    Route::get('/Dashboard', [AdminDashboardController::class, 'dashboard'])->name('Dashboard');
    Route::get('/All/Users', [AdminDashboardController::class, 'all_users'])->name('All.Users');
    Route::get('/Pending/Users', [AdminDashboardController::class, 'pending_users'])->name('Pending.Users');
    Route::get('/Approved/Users', [AdminDashboardController::class, 'approved_users'])->name('Approved.Users');
    Route::get('/Rejected/Users', [AdminDashboardController::class, 'rejected_users'])->name('Rejected.Users');
    Route::get('/Todays/Users', [AdminDashboardController::class, 'today_users'])->name('Todays.Users');
    Route::get('/Edit/User/{id}', [AdminDashboardController::class, 'edit_user'])->name('Edit.User');
    Route::post('/Update/User/{id}', [AdminDashboardController::class, 'update_user'])->name('Update.User');
    Route::get('/Change/Password/{id}', [AdminDashboardController::class, 'change_password'])->name('Change.Password');
    Route::post('/Update/Password/{id}', [AdminDashboardController::class, 'update_password'])->name('Update.Password');
    Route::get('/Add/Top/Users/', [AdminDashboardController::class, 'add_top_user'])->name('Add.Top.Users');
    Route::post('/Store/Top/Users/', [AdminDashboardController::class, 'store_top_user'])->name('Store.Top.Users');
    Route::get('/All/Top/Users/', [AdminDashboardController::class, 'all_top_user'])->name('All.Top.Users');
    Route::get('/Delete/Top/User/{id}', [AdminDashboardController::class, 'delete_top_user'])->name('Delete.Top.User');
    // Change user status
    Route::get('/Make/User/Approve/', [UserStatusController::class, 'approve_user'])->name('Make.User.Approve');
    Route::get('/Approve/User/{id}', [UserStatusController::class, 'approved'])->name('Approve.User');
    // make user reject
    Route::get('Make/User/Reject/{id}', [UserStatusController::class, 'reject'])->name('Make.User.Reject');
    // make user pending
    Route::get('/Make/User/Pending/{id}', [UserStatusController::class, 'pending_user'])->name('Make.User.Pending');
    Route::get('/Delete/Rejected/Users', [UserStatusController::class, 'del_rej_users'])->name('Del.Rej.Users');
    // task
    Route::get('/Add/Task', [TaskController::class, 'add_task'])->name('Add.Task');
    Route::post('/Store/Task', [TaskController::class, 'store_task'])->name('Store.Task');
    Route::get('/Delete/Task/{id}', [TaskController::class, 'delete_task'])->name('Delete.Task');
    // Withdraw Routes
    Route::get('/Pending/Withdraw', [AdminWithdrawController::class, 'pending_withdraw'])->name('Withdraw.Pending.Requests');
    Route::get('/Approved/Withdraw', [AdminWithdrawController::class, 'approved_withdraw'])->name('Withdraw.Approved.Requests');
    Route::get('/Rejected/Withdraw', [AdminWithdrawController::class, 'rejected_withdraw'])->name('Withdraw.Rejected.Requests');
    Route::get('/Make/Approved/Withdraw/{id}', [AdminWithdrawController::class, 'make_approve'])->name('Make.Withdraw.Approve');
    Route::get('/Make/Pending/Withdraw/{id}', [AdminWithdrawController::class, 'make_pending'])->name('Make.Withdraw.Pending');
    Route::get('/Make/Reject/Withdraw/{id}', [AdminWithdrawController::class, 'make_reject'])->name('Make.Withdraw.Reject');
    // setting routes
    Route::get('/Change/My/Password', [AdminSettingcontroller::class, 'change_my_password'])->name('Change.My.Password');
    Route::get('/Referral/Setting', [AdminSettingcontroller::class, 'referral_setting'])->name('Referral.Setting');
    Route::post('/Referral/Setting/Update/{id}', [AdminSettingcontroller::class, 'update_referral_setting'])->name('Update.Referral.Setting');
    Route::get('/Bank/Details', [AdminSettingcontroller::class, 'bank_details'])->name('Bank.Details');
    Route::post('/Update/Bank/Details/{id}', [AdminSettingcontroller::class, 'update_bank_details'])->name('Update.Bank.Details');
    Route::get('/Verification/Page', [AdminSettingcontroller::class, 'verification_page'])->name('Verification.Page');
    Route::get('/Marquee/Text', [AdminSettingcontroller::class, 'marquee'])->name('Marquee.Text');
    Route::post('/Update/Marquee/Text/{id}', [AdminSettingcontroller::class, 'update_marquee'])->name('Update.Marquee.Text');
    Route::post('/Update/Verification/Page/{id}', [AdminSettingcontroller::class, 'update_verification_page'])->name('Update.Verification.Text');
    Route::get('/Level/Page', [AdminSettingcontroller::class, 'level_page'])->name('Level.Page');
    Route::post('/Update/Level/Page/{id}', [AdminSettingcontroller::class, 'update_level'])->name('Update.Level');
    Route::get('/Contact/Us/', [AdminSettingcontroller::class, 'contactUs'])->name('Contact.Us');
    Route::post('/Updagte/Contact/Us/{id}', [AdminSettingcontroller::class, 'updateContactUs'])->name('Update.Contact.Us');
});

Route::get('/pending-status', [UserStatusController::class, 'pendingStatus'])->name('pending.status');
Route::get('/reject-status', [UserStatusController::class, 'updateStatus'])->name('reject.status');
