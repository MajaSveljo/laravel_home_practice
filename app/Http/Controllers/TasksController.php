<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks/index', compact('tasks'));
    }

    //this is called route model binding. for it to work the variable ($task)
    //must have the same name as the wild card passed in the route!
    
    public function show(Task $task) //does Task::find{wildcard}
    {
        // $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }
}
