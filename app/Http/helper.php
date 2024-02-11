<?php

use App\Models\admin\Task;
use App\Models\User;
use App\Models\user\SpinWin;
use App\Models\user\Withdraw;
use Carbon\Carbon;

function total_team()
{
    $team = User::where('referral', auth()->user()->name)->where('status', 'approved')->get()->count();
    return $team;
}

function withdraw()
{
    $pending_withdraw = Withdraw::where('user_id', auth()->user()->id)->get();
    $total_withdraw = 0;
    foreach ($pending_withdraw as $amount) {
        $total_withdraw += $amount->amount;
    }

    return $total_withdraw;
}


function pending_withdraw()
{
    $pending_withdraw = Withdraw::where('status', 'pending')->where('user_id', auth()->user()->id)->get();
    $total_withdraw = 0;
    foreach ($pending_withdraw as $amount) {
        $total_withdraw += $amount->amount;
    }

    return $total_withdraw;
}

function total_withdraw()
{
    $withdraw = Withdraw::where('user_id', auth()->user()->id)->where('status', 'approved')->get();
    $total_withdraw = 0;
    foreach ($withdraw as $amount) {
        $total_withdraw += $amount->amount;
    }

    return $total_withdraw;
}

function total_reward()
{
    $reward = SpinWin::where('user_id', auth()->user()->id)->get();
    $total_reward = 0;
    foreach ($reward as $money) {
        $total_reward += $money->amount;
    }
    return $total_reward;
}

// Admin

function Total_user()
{
    $user = User::get()->count();
    return $user;
}

function pending_user()
{
    $user = User::where('status', 'pending')->get();
    $count = $user->count();
    return $count;
}

function approved_user()
{
    $user = User::where('status', 'approved')->get();
    $count = $user->count();
    return $count;
}

function rejected_user()
{
    $user = User::where('status', 'rejected')->get();
    $count = $user->count();
    return $count;
}

function today_user()
{
    $user = User::where('status', 'rejected')->whereDate('created_at', Carbon::today())->get();
    $count = $user->count();
    return $count;
}

function total_tasks()
{
    $tasks = Task::get()->count();
    return $tasks;
}

function given_withdraw()
{
    $withdraw = Withdraw::where('status', 'approved')->get();
    $total = 0;
    foreach ($withdraw as $item) {
        $total += $item->amount;
    }
    return $total;
}

function total_pending_withdraw()
{
    $withdraw = Withdraw::where('status', 'pending')->get();
    $total = 0;
    foreach ($withdraw as $item) {
        $total += $item->amount;
    }
    return $total;
}
