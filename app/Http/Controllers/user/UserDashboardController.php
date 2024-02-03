<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\ContactUsSetting;
use App\Models\admin\MarqueeText;
use App\Models\admin\Task;
use App\Models\admin\TopUsers;
use App\Models\Setting;
use App\Models\User;
use App\Models\user\SpinWin;
use App\Models\user\SpinWithdraw;
use App\Models\user\Withdraw;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserDashboardController extends Controller
{

    public function welcome()
    {
        $contact = ContactUsSetting::where('status', 1)->first();
        return view('welcome', compact('contact'));
    }

    public function dashboard()
    {
        $contact = ContactUsSetting::where('status', 1)->first();
        $marquee = MarqueeText::where('status', 1)->first();
        return view('user.dashboard', compact('marquee', 'contact'));
    }

    public function team()
    {
        $referrals = User::where('referral', auth()->user()->name)->where('status', 'approved')->get();
        return view('user.team', compact('referrals'));
    }

    public function setting()
    {
        return view('user.setting');
    }

    public function link()
    {
        $contact = ContactUsSetting::where('status', 1)->first();
        return view('user.referral', compact('contact'));
    }

    public function plan()
    {
        return view('user.plan');
    }

    public function contact()
    {
        $contact = ContactUsSetting::where('status', 1)->first();
        return view('user.contact',compact('contact'));
    }

    public function spin()
    {
        return view('user.spin');
    }

    public function spinWheel($amount)
    {
        // check if user spin it already
        $spin = SpinWin::where('user_id', auth()->user()->id)->whereDate('created_at', Carbon::today())->first();
        if ($spin != null) {
            return redirect(route('User.Dashboard'))->with('error', 'You get today reward already');
        }

        $spin = new SpinWin();
        $spin->user_id = auth()->user()->id;
        $spin->amount += $amount;
        $spin->save();
        return redirect()->back()->with('success', 'Claimed');
    }

    public function spinWithdraw()
    {
        return redirect()->route('User.Dashboard')->with('error', 'You must have Level 8 to request withdraw');
    }

    public function promote()
    {
        $contact = ContactUsSetting::where('status', 1)->first();
        return view('user.promote', compact('contact'));
    }

    public function success(Request $request)
    {
        return redirect(route('User.Dashboard'))->with('success', 'Your Chennel will be promoted on Level 5');
    }

    public function edit()
    {
        $user = User::where('id', auth()->user()->id)->with('trxIds')->first();
        return view('profile.edit', compact('user'));
    }
}
