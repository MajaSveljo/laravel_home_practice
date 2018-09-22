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

Route::get('/', function () {
    return view('welcome', [
        'name' => 'Maja'
    ]);
});

Route::get('/tasks', function (){
    $tasks = DB::table('tasks')->get();
    //DB code is called querry builder
    //we can specify a table and give a number of conditions
    
    return view('tasks/index', compact('tasks'));
});

//{} is called a wildcard and can be anything not just an id
    Route::get('/tasks/{task}', function ($id){
    $task = DB::table('tasks')->find($id);

    
    return view('tasks.show', compact('task'));
});