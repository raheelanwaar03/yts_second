<?php

use App\Models\User;

function total_team()
{
    $team = User::where('referral',auth()->user()->email)->get()->count();
    return $team;
}
