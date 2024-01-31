<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Task;
use App\Models\user\vistor;
use App\Models\user\DailyTask;
use App\Models\User;
use App\Models\user\TodayRewardCheck;
use App\Models\user\vistors;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserTaskController extends Controller
{
    public function all_tasks()
    {
        $user = User::where('id', auth()->user()->id)->with('trxIds')->first();
        $tasks = Task::where('level', auth()->user()->level)->where('plan', $user->trxIds->plan)->get();
        return view('user.task', compact('tasks'));
    }

    public function index($id)
    {
        $currentDate = Carbon::now();
        $tenDaysAgo = $currentDate->subDays(10);
        // checking user last 15 days referals
        $user = User::find(auth()->user()->id);

        if (!$user->isAccount10DaysOld()) {
            $task = Task::find($id);
            $taskRewarad = $task->price;

            $visitor = TodayRewardCheck::where('user_id', auth()->user()->id)->where('task_id', $id)->whereDate('created_at', '=', Carbon::today())->first();
            if (!$visitor) {
                // storing product
                $visitor = new TodayRewardCheck();
                $visitor->user_id = auth()->user()->id;
                $visitor->task_id = $id;
                $visitor->price = $taskRewarad;
                $visitor->save();

                $user->balance += $taskRewarad;
                $user->save();
                return redirect()->back()->with('success', 'Reward recived');
            }
            return redirect()->back()->with('error', 'already recived');
        }

        $userReferal = User::where('referral', auth()->user()->name)->whereDate('created_at', '>=', $tenDaysAgo)->where('status', 'approved')->get();
        if ($userReferal->isEmpty()) {
            return redirect()->back()->with('error', 'You have not add any user from last 10 days. Please add new user to get rewarded');
        } else {
            $product = Task::find($id);
            $taskRewarad = $product->price;
            // check user
            $visitor = TodayRewardCheck::where('user_id', auth()->user()->id)->where('task_id', $id)->whereDate('created_at', '=', Carbon::today())->first();
            if (!$visitor) {
                // storing product
                $visitor = new TodayRewardCheck();
                $visitor->user_id = auth()->user()->id;
                $visitor->task_id = $id;
                $visitor->price += $taskRewarad;
                $visitor->save();

                $user->balance += $taskRewarad;
                $user->save();

                return redirect()->back()->with('success', 'Reward recived');
            }

            return redirect()->back()->with('error', 'You have been rewarded before for this link');
        }
    }
}
