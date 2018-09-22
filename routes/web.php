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
    //other syntax
    // return view('welcome')->with('name', 'Maja');
    //array way
    // $array = ['first', 'second', 'third'];
    //     return view('welcome', compact('array'));
    //array to string conversion - na view-u stranici
    //mora ispis sa foreach
});

Route::get('/tasks', function (){
    $tasks = [
        'Go to the store',
        'Eat',
        'Practice Laravel'
    ];
    return view('tasks', compact('tasks'));
});