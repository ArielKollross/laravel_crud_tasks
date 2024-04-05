<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tasks\TasksStore;
use App\Http\Requests\Tasks\TasksUpdate;
use App\Models\Tasks;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Tasks::all();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(TasksStore $request)
    {
        Tasks::create($request->validated());

        return redirect()->route('tasks.index')->with('status', 'Tarefa criada com sucesso.');
    }

    public function edit($id)
    {
        $task = Tasks::findOrFail($id);

        return view('tasks.edit', compact('task'));
    }

    public function update(TasksUpdate $request, Tasks $task)
    {
        $task->update($request->validated());

        return redirect()->route('tasks.index')->with('status', 'Tarefa atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $tasks = Tasks::findOrFail($id);
        $tasks->delete();

        return redirect()->route('tasks.index')->with('status', 'Tarefa excluída com sucesso.');
    }
}
