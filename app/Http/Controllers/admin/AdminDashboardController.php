<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\Withdraw;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function pending_users()
    {
        $users = User::where('status', 'pending')->has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx_id')->whereNotNull('screen_shot')
                    ->whereNotNull('sender_name')->whereNotNull('sender_number');
            })->get();

        return view('admin.user.pending', compact('users'));
    }

    public function approved_users()
    {
        $users = User::where('status', 'approved')->has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx_id')->whereNotNull('screen_shot')
                    ->whereNotNull('sender_name')->whereNotNull('sender_number');
            })->get();
        return view('admin.user.approved', compact('users'));
    }

    public function rejected_users()
    {
        $users = User::where('status', 'rejected')->has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx_id')->whereNotNull('screen_shot')
                    ->whereNotNull('sender_name')->whereNotNull('sender_number');
            })->get();

        return view('admin.user.rejected', compact('users'));
    }

    public function today_users()
    {
        $users = User::whereDate('created_at', Carbon::today())->has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx_id')->whereNotNull('screen_shot')
                    ->whereNotNull('sender_name')->whereNotNull('sender_number');
            })->get();

        return view('admin.user.today', compact('users'));
    }

    public function edit_user($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update_user(Request $request, $id)
    {
        $user =  User::find($id);
        $user->balance = $request->balance;
        $user->save();
        return redirect()->back()->with('success', 'User Details Updated');
    }
}
