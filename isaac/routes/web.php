<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Default route to welcome view
Route::get('/', function () {
    return view('welcome');
});

// Resource route for tasks
Route::resource('tasks', TaskController::class);
