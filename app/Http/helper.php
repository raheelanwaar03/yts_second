<?php

use App\Models\User;
use App\Models\user\SpinWin;
use App\Models\user\Withdraw;

function total_team()
{
    $team = User::where('referral', auth()->user()->email)->get()->count();
    return $team;
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
        $total_reward = $money->amount;
    }
    return $total_reward;
}
