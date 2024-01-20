<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function add_task()
    {
        $tasks = Task::get();
        return view('admin.task.add', compact('tasks'));
    }

    public function store_task(Request $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->price = $request->price;
        $task->link = $request->link;
        $task->level = $request->level;
        $task->save();
        return redirect()->back()->with('success', 'Task added');
    }
}
