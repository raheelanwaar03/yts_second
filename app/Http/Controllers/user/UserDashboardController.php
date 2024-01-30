<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
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
        $spin->amount = $amount;
        $spin->save();
        return redirect()->back()->with('success', 'Claimed');
    }

    public function spinWithdraw()
    {
        return view('user.spinWithdraw');
    }

    public function storeSpinWithdraw(Request $request)
    {
        if (auth()->user()->level != 'Level 7') {
            return redirect(route('User.Dashboard'))->with('error', 'Your level must be on Level 8');
        }

        // check if already requested
        $spin_withdraw = SpinWithdraw::where('user_id', auth()->user()->id)->whereDate('created_at', Carbon::today())->first();
        if ($spin_withdraw != null) {
            return redirect()->route('User.Dashboard')->with('error', 'Already Requested');
        }


        if (total_reward() < $request->amount) {
            return redirect()->back()->with('error', 'Not enough balance');
        }

        $spin_withdraw = new SpinWithdraw();
        $spin_withdraw->user_id = auth()->user()->id;
        $spin_withdraw->amount = $request->amount;
        $spin_withdraw->title = $request->title;
        $spin_withdraw->bank = $request->bank;
        $spin_withdraw->account = $request->account;
        $spin_withdraw->save();
        return redirect(route('User.Dashboard'))->with('success', 'Successfully Requested');
    }

    public function promote()
    {
        return view('user.promote');
    }

    public function success(Request $request)
    {
        return redirect(route('User.Dashboard'))->with('success', 'Your Link submited successfully');
    }

    public function edit()
    {
        $user = User::where('id', auth()->user()->id)->with('trxIds')->first();
        return view('profile.edit', compact('user'));
    }
}
