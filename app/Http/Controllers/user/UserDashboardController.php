<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Task;
use App\Models\Setting;
use App\Models\User;
use App\Models\user\Withdraw;
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
        $referrals = User::where('referral', auth()->user()->name)->get();
        return view('user.team', compact('referrals'));
    }

    public function link()
    {
        return view('user.referral');
    }

    public function plan()
    {
        return view('user.plan');
    }

    public function contact()
    {
        return view('user.contact');
    }
}
