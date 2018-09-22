<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Task;
//if this is imported on the page we don't have to write
//App\Task before every Task, just Task

Route::get('/', function () {
    return view('welcome', [
        'name' => 'Maja'
    ]);
});

Route::get('/tasks', function (){
    $tasks = Task::all();

    
    return view('tasks/index', compact('tasks'));
});

    Route::get('/tasks/{task}', function ($id){
    $task = Task::find($id);

    
    return view('tasks.show', compact('task'));
});