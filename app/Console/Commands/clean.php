<?php

namespace App\Console\Commands;

use App\Models\admin\Task;
use App\Models\User;
use App\Models\EasyPaisaMangement;
use App\Models\ReferralLevel;
use App\Models\Setting;
use App\Models\VerificationText;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $easyPaisa = new EasyPaisaMangement();
        $easyPaisa->name = 'test';
        $easyPaisa->number = '03123456789';
        $easyPaisa->bank = 'Easypaisa';
        $easyPaisa->status = 1;
        $easyPaisa->save();

        // referral limite
        $setting = new Setting();
        $setting->min_amount = '50';
        $setting->max_amount = '500';
        $setting->silver = '10';
        $setting->gold = '20';
        $setting->dimond = '30';
        $setting->status = 1;
        $setting->save();

        // Verification page text

        $verificationText = new VerificationText();
        $verificationText->text = 'Welcome to Name website we will approve your account after checking your given details';
        $verificationText->status = 1;
        $verificationText->save();

        //    set level according to thier referral

        $level = new ReferralLevel();
        $level->level1 = 1;
        $level->level2 = 2;
        $level->level3 = 3;
        $level->level4 = 4;
        $level->level5 = 5;
        $level->level6 = 6;
        $level->level7 = 7;
        $level->level8 = 8;
        $level->level9 = 9;
        $level->level10 = 10;
        $level->status = 1;
        $level->save();

        // adding some tesing tasks

        $task = new Task();
        $task->title = 'Read the latest blog post on web development trends.';
        $task->link = 'https://www.w3schools.com/';
        $task->level = 'Level 1';
        $task->price = '10';
        $task->plan = 'gold';
        $task->save();

        $task = new Task();
        $task->title = 'Read the latest blog post on web development trends.';
        $task->link = 'https://www.facebook.com/';
        $task->level = 'Level 0';
        $task->price = '15';
        $task->plan = 'silver';
        $task->save();

        $user = new User();
        $user->name = 'Admin';
        $user->referral = 'default';
        $user->balance = '0';
        $user->mobile = '03000000000';
        $user->email = 'admin123@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->status = 'approved';
        $user->role = 'admin';
        $user->save();


        $user = new User();
        $user->name = 'User';
        $user->email = 'user123@gmail.com';
        $user->referral = 'default';
        $user->balance = '10000';
        $user->mobile = '03000000000';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->status = 'approved';
        $user->save();

        return Command::SUCCESS;
    }
}
