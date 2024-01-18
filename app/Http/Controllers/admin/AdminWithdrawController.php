<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\Withdraw;
use Illuminate\Http\Request;

class AdminWithdrawController extends Controller
{
    public function pending_withdraw()
    {
        $withdraws = Withdraw::where('status', 'pending')->get();
        return view('admin.withdraw.pending', compact('withdraws'));
    }

    public function approved_withdraw()
    {
        $withdraws = Withdraw::where('status', 'approved')->get();
        return view('admin.withdraw.approved', compact('withdraws'));
    }

    public function rejected_withdraw()
    {
        $withdraws = Withdraw::where('status', 'rejected')->get();
        return view('admin.withdraw.rejected', compact('withdraws'));
    }

    public function make_approve($id)
    {
        $withdraw = Withdraw::find($id);
        $withdraw->status = 'approved';
        $withdraw->save();

        $user = User::where('id', $withdraw->user_id)->first();
        $user->balance -= $withdraw->amount;
        $user->save();
        return redirect()->back()->with('success', 'Success');
    }

    public function make_pending($id)
    {
        $withdraw = Withdraw::find($id);
        $withdraw->status = 'pending';
        $withdraw->save();
        return redirect()->back()->with('success', 'Success');
    }


    public function make_reject($id)
    {
        $withdraw = Withdraw::find($id);
        $withdraw->status = 'rejected';
        $withdraw->save();
        return redirect()->back()->with('success', 'Success');
    }
}
