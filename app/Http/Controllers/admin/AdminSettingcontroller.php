<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\EasyPaisaMangement;
use App\Models\ReferralLevel;
use App\Models\Setting;
use App\Models\VerificationText;
use Illuminate\Http\Request;

class AdminSettingcontroller extends Controller
{
    public function referral_setting()
    {
        $limit = Setting::where('status', '1')->first();
        return view('admin.setting.referral_limit', compact('limit'));
    }

    public function update_referral_setting(Request $request, $id)
    {
        $limit = Setting::find($id);
        $limit->min_amount = $request->min_amount;
        $limit->max_amount = $request->max_amount;
        $limit->silver = $request->silver;
        $limit->gold = $request->gold;
        $limit->dimond = $request->dimond;
        $limit->save();
        return redirect()->back()->with('success', 'Limit updated');
    }

    public function bank_details()
    {
        $bank = EasyPaisaMangement::where('status', 1)->first();
        return view('admin.setting.bank', compact('bank'));
    }

    public function update_bank_details(Request $request, $id)
    {
        $bank = EasyPaisaMangement::find($id);
        $bank->name = $request->name;
        $bank->bank = $request->bank;
        $bank->number = $request->number;
        return redirect()->back()->with('success', 'Details Updated');
    }

    public function verification_page()
    {
        $ver_text = VerificationText::where('status', '1')->first();
        return view('admin.setting.verification', compact('ver_text'));
    }

    public function update_verification_page(Request $request, $id)
    {
        $ver_text = VerificationText::find($id);
        $ver_text->text = $request->text;
        $ver_text->save();
        return redirect()->back()->with('success', 'Text Edited');
    }

    public function level_page()
    {
        $level = ReferralLevel::where('status', 1)->first();
        return view('admin.setting.level', compact('level'));
    }

    public function update_level(Request $request, $id)
    {
        $level = ReferralLevel::find($id);
        $level->level1 = $request->level1;
        $level->level2 = $request->level2;
        $level->level3 = $request->level3;
        $level->level4 = $request->level4;
        $level->level5 = $request->level5;
        $level->level6 = $request->level6;
        $level->level7 = $request->level7;
        $level->level8 = $request->level8;
        $level->level9 = $request->level9;
        $level->level10 = $request->level10;
        $level->save();
        return redirect()->back()->with('success', 'Level Setting Updated');
    }
}
