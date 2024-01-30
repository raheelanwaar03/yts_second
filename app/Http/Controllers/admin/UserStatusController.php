<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ReferralLevel;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class UserStatusController extends Controller
{
    public function approve_user($id)
    {
        $levelCheck = ReferralLevel::where('status', 1)->first();
        $level1 = $levelCheck->level1;
        $level2 = $levelCheck->level2;
        $level3 = $levelCheck->level3;
        $level4 = $levelCheck->level4;
        $level5 = $levelCheck->level5;
        $level6 = $levelCheck->level6;
        $level7 = $levelCheck->level7;
        $level8 = $levelCheck->level8;
        $level9 = $levelCheck->level9;
        $level10 = $levelCheck->level10;

        // Taking the admin commission
        $setting = Setting::where('status', '1')->first();
        $silver = $setting->silver;
        $silver_Second_Commission = $silver * 15 / 100;
        $silver_Third_Commission = $silver * 5 / 100;
        // getting gold commission
        $gold = $setting->gold;
        $gold_Second_Commission = $gold * 15 / 100;
        $gold_Third_Commission = $gold * 5 / 100;
        // Getting dimond Commissions
        $dimond = $setting->dimond;
        $dimond_Second_Commission = $dimond * 15 / 100;
        $dimond_Third_Commission = $dimond * 5 / 100;

        $user = User::where('id',$id)->with('trxIds')->first();
        $user->status = 'approved';
        $user->save();
        // getting user package
        $userPlan = $user->trxIds->plan;

        if ($userPlan == 'silver') {
            $firstUpliner = User::where('name', $user->referral)->where('status', 'approved')->first();
            if ($firstUpliner == '') {
                return redirect()->back()->with('success', 'Account has beed Approved successfully');
            } else {
                $firstUpliner->balance += $silver;
                // giving upliner his level
                $allUsers = User::where('referral', $firstUpliner->name)->where('status', 'approved')->get();
                $referCount = $allUsers->count();

                if ($allUsers != '') {
                    if ($referCount <= 4) {
                        $firstUpliner->level = 'Level 0';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level1) {
                        $firstUpliner->level = 'Level 1';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level2) {
                        $firstUpliner->level = 'Level 2';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level3) {
                        $firstUpliner->level = 'Level 3';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level4) {
                        $firstUpliner->level = 'Level 4';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level5) {
                        $firstUpliner->level = 'Level 5';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level6) {
                        $firstUpliner->level = 'Level 6';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level7) {
                        $firstUpliner->level = 'Level 7';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level8) {
                        $firstUpliner->level = 'Level 8';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level9) {
                        $firstUpliner->level = 'Level 9';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level10) {
                        $firstUpliner->level = 'Level 10';
                        $firstUpliner->save();
                    }
                }

                //  Second Upliner
                $indirectCommission1 = $silver_Second_Commission;
                // getting user
                $secondUpliner = User::where('name', $firstUpliner->referral)->where('status', 'approved')->first();
                if ($secondUpliner == '') {
                    return redirect()->back()->with('success', 'Account has beed Approved successfully');
                } else {
                    $secondUpliner->balance += $indirectCommission1;
                    $secondUpliner->save();
                }
                // Third UPliner
                $indirectCommission2 = $silver_Third_Commission;
                // getting third person;
                $thirdUpliner = User::where('name', $secondUpliner->referral)->where('status', 'approved')->first();
                if ($thirdUpliner == '') {
                    return redirect()->back()->with('success', 'Account has beed Approved successfully');
                } else {
                    $thirdUpliner->balance += $indirectCommission2;
                    $thirdUpliner->save();
                }
            }
        }

        if ($userPlan == 'gold') {
            $firstUpliner = User::where('name', $user->referral)->where('status', 'approved')->first();
            if ($firstUpliner == '') {
                return redirect()->back()->with('success', 'Account has beed Approved successfully');
            } else {
                $firstUpliner->balance += $gold;
                // giving upliner his level
                $mainUser = User::where('referral', $firstUpliner->name)->where('status', 'approved')->get();
                $referCount = $mainUser->count();

                if ($mainUser != '') {
                    if ($referCount <= 4) {
                        $firstUpliner->level = 'Level 0';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level1) {
                        $firstUpliner->level = 'Level 1';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level2) {
                        $firstUpliner->level = 'Level 2';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level3) {
                        $firstUpliner->level = 'Level 3';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level4) {
                        $firstUpliner->level = 'Level 4';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level5) {
                        $firstUpliner->level = 'Level 5';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level6) {
                        $firstUpliner->level = 'Level 6';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level7) {
                        $firstUpliner->level = 'Level 7';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level8) {
                        $firstUpliner->level = 'Level 8';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level9) {
                        $firstUpliner->level = 'Level 9';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level10) {
                        $firstUpliner->level = 'Level 10';
                        $firstUpliner->save();
                    }
                }

                //  Second Upliner
                $indirectCommission1 = $gold_Second_Commission;
                // getting user
                $secondUpliner = User::where('name', $firstUpliner->referral)->where('status', 'approved')->first();
                if ($secondUpliner == '') {
                    return redirect()->back()->with('success', 'Account has beed Approved successfully');
                } else {
                    $secondUpliner->balance += $indirectCommission1;
                    $secondUpliner->save();
                }
                // Third UPliner
                $indirectCommission2 = $gold_Third_Commission;
                // getting third person;
                $thirdUpliner = User::where('name', $secondUpliner->referral)->where('status', 'approved')->first();
                if ($thirdUpliner == '') {
                    return redirect()->back()->with('success', 'Account has beed Approved successfully');
                } else {
                    $thirdUpliner->balance += $indirectCommission2;
                    $thirdUpliner->save();
                }
            }
        }

        if ($userPlan == 'dimond') {
            $firstUpliner = User::where('name', $user->referral)->where('status', 'approved')->first();
            if ($firstUpliner == '') {
                return redirect()->back()->with('success', 'Account has beed Approved successfully');
            } else {
                $firstUpliner->balance += $dimond;
                // giving upliner his level
                $mainUser = User::where('referral', $firstUpliner->name)->where('status', 'approved')->get();
                $referCount = $mainUser->count();

                if ($mainUser != '') {
                    if ($referCount <= 4) {
                        $firstUpliner->level = 'Level 0';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level1) {
                        $firstUpliner->level = 'Level 1';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level2) {
                        $firstUpliner->level = 'Level 2';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level3) {
                        $firstUpliner->level = 'Level 3';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level4) {
                        $firstUpliner->level = 'Level 4';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level5) {
                        $firstUpliner->level = 'Level 5';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level6) {
                        $firstUpliner->level = 'Level 6';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level7) {
                        $firstUpliner->level = 'Level 7';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level8) {
                        $firstUpliner->level = 'Level 8';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level9) {
                        $firstUpliner->level = 'Level 9';
                        $firstUpliner->save();
                    }
                    if ($referCount >= $level10) {
                        $firstUpliner->level = 'Level 10';
                        $firstUpliner->save();
                    }
                }

                //  Second Upliner
                $indirectCommission1 = $dimond_Second_Commission;
                // getting user
                $secondUpliner = User::where('name', $firstUpliner->referral)->where('status', 'approved')->first();
                if ($secondUpliner == '') {
                    return redirect()->back()->with('success', 'Account has beed Approved successfully');
                } else {
                    $secondUpliner->balance += $indirectCommission1;
                    $secondUpliner->save();
                }
                // Third UPliner
                $indirectCommission2 = $dimond_Third_Commission;
                // getting third person;
                $thirdUpliner = User::where('name', $secondUpliner->referral)->where('status', 'approved')->first();
                if ($thirdUpliner == '') {
                    return redirect()->back()->with('success', 'Account has beed Approved successfully');
                } else {
                    $thirdUpliner->balance += $indirectCommission2;
                    $thirdUpliner->save();
                }
            }
        }



        return redirect()->back()->with('success', 'User Approved Successfully');
    }

    public function rejected_user($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success', 'Rejected successfully');
    }

    public function pending_user($id)
    {
        $user = User::find($id);
        $user->status = 'pending';
        $user->save();
        return redirect()->back()->with('success', 'User has been Pending now');
    }

    public function del_rej_users()
    {
        $users = User::where('status', 'rejected')->get();
        foreach ($users as $user) {
            $user->delete();
        }
        return redirect()->back()->with('success', 'Rejected Users Deleted');
    }
}
