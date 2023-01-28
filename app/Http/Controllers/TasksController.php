<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->get();
        return view('tasks.index',[ 
            'tasks' => $tasks, 
            'task' => new Task, 
            'submit' => 'Create', 
        ]);
    }

    public function store(TaskRequest $request)
    {
        Task::create($request->all()); 
        return back();
    }

    public function edit(Task $task)
    {
        return view('tasks.edit',[ 
            'task' => $task, 
            'submit' => 'Update' 
        ]);
    }

    public function update(TaskRequest $request, $id)
    {
        Task::find($id)->update([ 
            'list' => $request->list 
        ]); 
        return redirect('tasks');
    }

    public function destroy($id)
    {
        Task::find($id)->delete(); 
        return back();
    }

}
