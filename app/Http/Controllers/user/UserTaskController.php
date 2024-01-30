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

            $visitor = vistors::where('user_id', auth()->user()->id)->where('task_id', $id)->whereDate('created_at', '=', Carbon::today())->first();
            if (!$visitor) {
                // storing product
                $visitor = new vistors();
                $visitor->user_id = auth()->user()->id;
                $visitor->task_id = $id;
                $visitor->amount = $taskRewarad;
                $visitor->dateTime = date(now());
                $visitor->save();

                $user->balance += $taskRewarad;
                $user->save();
                return redirect()->back()->with('success', 'Reward recived');
            }
        }

        $userReferal = User::where('referral', auth()->user()->email)->whereDate('created_at', '>', $tenDaysAgo)->where('status', 'approved')->get();
        if ($userReferal->isEmpty()) {
            return redirect()->back()->with('error', 'You have not add any user from last 10 days. Please add new user to get rewarded');
        } else {
            $product = DailyTask::find($id);
            $taskRewarad = $product->price;
            // check user
            $visitor = vistors::where('user_id', auth()->user()->id)->where('task_id', $id)->whereDate('created_at', '=', Carbon::today())->first();
            if (!$visitor) {
                // storing product
                $visitor = new vistors();
                $visitor->user_id = auth()->user()->id;
                $visitor->product_id = $id;
                $visitor->amount += $taskRewarad;
                $visitor->dateTime = date(now());
                $visitor->save();

                $user->balance += $taskRewarad;
                $user->save();

                return redirect()->back()->with('success', 'Reward recived');
            }

            return redirect()->back()->with('error', 'You have been rewarded before for this link');
        }
    }

    public function get_reward($id)
    {
        $task = Task::find($id);
        // check if user get this plan reward befor

        $today_task = TodayRewardCheck::where('task_id', $task->id)->where('user_id', auth()->user()->id)->where('created_at', Carbon::today());
        if ($today_task != null) {
            return redirect()->back()->with('error', 'You have got this plan Reward before');
        } else {
            $user = User::find(auth()->user()->id);
            $user->balance += $task->price;
            $user->save();
            // Add into history
            $today_task = new TodayRewardCheck();
            $today_task->user_id = auth()->user()->id;
            $today_task->task_id = $task->id;
            $today_task->price = $task->price;
            $today_task->save();
            return redirect()->back()->with('success', 'You got this task reward');
        }
    }
}
