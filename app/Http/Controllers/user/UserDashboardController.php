<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }

    public function dashboard()
    {

        return view('user.dashboard');
    }

    public function team()
    {
        $referrals = User::where('referral', auth()->user()->email)->get();
        return view('user.team',compact('referrals'));
    }
}
