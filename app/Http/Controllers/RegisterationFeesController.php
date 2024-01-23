<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserPlans;
use App\Models\VerificationText;
use Illuminate\Http\Request;

class RegisterationFeesController extends Controller
{
    public function registerationFees()
    {
        if (auth()->user()->status == 'approved') {
            return redirect()->route('User.Dashboard');
        } else {
            return view('auth.payment');
        }

        if (auth()->user()->role == 'admin') {
            return redirect()->route('Admin.Dashboard');
        }
    }

    public function verificationPage()
    {
        $verification = VerificationText::where('status', '1')->first();
        return view('auth.confirmation', compact('verification'));
    }

    public function feesDetailStore(Request $request)
    {
        $validated = $request->validate([
            'plan' => 'required',
            'sender_name' => 'required',
            'sender_number' => 'required',
            'trx_id' => 'required',
            'screen_shot' => 'required',
        ]);

        // checking the lenght of tid
        $lenth = $request->trx_id;
        $lenthCheck = strlen($lenth);
        if ($lenthCheck <= 10) {
            return redirect()->back()->with('error', 'Please enter 11 digits Trx ID');
        }

        // checking the length of num
        $num = $request->sender_number;
        $numLength = strlen($num);
        if ($numLength <= 10) {
            return redirect()->back()->with('error', 'Please enter 11 charcter num');
        }

        // checking uniqe Trx id.

        $tidChecks = UserPlans::get();
        if ($tidChecks != null) {
            foreach ($tidChecks as $tidCheck) {
                $tidCheck = $tidCheck->trx_id;
                if ($validated['trx_id'] == $tidCheck)
                    return redirect()->back()->with('error', 'This tid is used before');
            }
        }


        // $user = User::where('id', auth()->user()->id)->first();


        $image = $validated['screen_shot'];
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $fees = new UserPlans();
        $fees->user_id = auth()->user()->id;
        $fees->plan = $validated['plan'];
        $fees->sender_name = $validated['sender_name'];
        $fees->sender_number = $validated['sender_number'];
        $fees->trx_id = $validated['trx_id'];
        $fees->screen_shot = $imageName;
        $fees->save();
        return redirect()->route('Verification.Page')->with('success', 'Request submit successfully');
    }
}
