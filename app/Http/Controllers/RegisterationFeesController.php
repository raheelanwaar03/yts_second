<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterationFeesController extends Controller
{
    public function registerationFees()
    {
        return view('auth.payment');
    }

    public function feesDetailStore(Request $request)
    {
        return $request;
    }



}
