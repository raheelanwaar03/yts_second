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
        $referrals = User::where('referral', auth()->user()->email)->get();
        return view('user.team',compact('referrals'));
    }

    public function withdraw()
    {
        return view('user.withdraw');
    }

    public function store_withdraw(Request $request)
    {
        $request_amount = $request->amount;
        if(auth()->user()->balance == null)
        {
            return redirect()->route('User.Dashboard')->with('error','Empty Balance');
        }

        if(auth()->user()->balance < $request_amount )
        {
            return redirect()->back()->with('error','Less Balance');
        }

        $adminWidthraw = Setting::where('status', '1')->first();
        $adminWidthrawMini = $adminWidthraw->min_amount;
        $adminWidthrawMax = $adminWidthraw->max_amount;

        if ($adminWidthrawMini > $request_amount) {
            return redirect()->back()->with('error', 'Your Widthrawal amount is less than Admin Limite');
        }

        if ($request_amount > $adminWidthrawMax) {
            return redirect()->back()->with('error', 'Your Widthrawal amount is Greater than Admin Limite');
        }

        $widthrawRequest = Withdraw::where('status', 'pending')->where('user_id', auth()->user()->id)->first();
        if ($widthrawRequest) {
            return redirect()->back()->with('error', 'You already requested for widthraw please wait for approval');
        }

        $withdraw = new Withdraw();
        $withdraw->user_id = auth()->user()->id;
        $withdraw->amount = $request->amount;
        $withdraw->title = $request->title;
        $withdraw->account = $request->account;
        $withdraw->bank = $request->bank;
        $withdraw->save();
        return redirect()->route('User.Dashboard')->with('success','Request Submit successfully');

    }

    public function withdraw_history()
    {
        $history = Withdraw::where('user_id',auth()->user()->id)->get();
        return view('user.withdraw_history',compact('history'));
    }


}
