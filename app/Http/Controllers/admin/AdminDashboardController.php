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
        $users = User::has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx_id')->whereNotNull('screen_shot')
                    ->whereNotNull('sender_name')->whereNotNull('sender_number');
            })->get();

        return view('admin.user.pending', compact('users'));
    }

    public function approved_users()
    {
        $users = User::has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx_id')->whereNotNull('screen_shot')
                    ->whereNotNull('sender_name')->whereNotNull('sender_number');
            })->get();

        return view('admin.user.approved', compact('users'));
    }

    public function rejected_users()
    {
        $users = User::has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx_id')->whereNotNull('screen_shot')
                    ->whereNotNull('sender_name')->whereNotNull('sender_number');
            })->get();

        return view('admin.user.rejected', compact('users'));
    }

    public function today_users()
    {
        $users = User::has('trxIds')
            ->whereHas('trxIds', function ($query) {
                $query->whereNotNull('trx_id')->whereNotNull('screen_shot')
                    ->whereNotNull('sender_name')->whereNotNull('sender_number');
            })->get();

        return view('admin.user.today', compact('users'));
    }
}
