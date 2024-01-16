<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\Task;
use App\Models\user\vistor;
use App\Models\user\DailyTask;
use App\Models\User;
use App\Models\user\vistors;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserTaskController extends Controller
{
    public function all_tasks()
    {
        $tasks = Task::get();
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
}
