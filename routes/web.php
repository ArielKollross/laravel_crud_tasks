<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tasks', [TasksController::class, 'index']);

Route::post('/create', function () {

});

Route::update('/update/{$id}', function () {
    return view('welcome');
});

Route::delete('/delete/{$id}', function () {
    return view('welcome');
});


