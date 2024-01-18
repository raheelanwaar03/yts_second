<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\Withdraw;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function pending_withdraw()
    {
        $withdraws = Withdraw::where('status','pending')->get();
        return view('admin.withdraw.pending',compact('withdraws'));
    }


}
