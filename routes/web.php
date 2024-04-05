<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::resource('tasks', TasksController::class)->except(['show']);
