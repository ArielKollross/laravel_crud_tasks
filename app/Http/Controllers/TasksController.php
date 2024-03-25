<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        return view('tasks');
    }

    public function get()
    {
        return Tasks::all();
    }

    public function store(Request $request)
    {
        $tasks = new Tasks($request->all());

        return $tasks;
    }

    public function update(Request $request, $id)
    {
        $tasks = Tasks::findOrFail($id);
        $tasks->update($request->all());

        return $tasks;
    }

    public function delete($id)
    {
        $tasks = Tasks::findOrFail($id);
        $tasks->delete();

        return response(null, 204);
    }


}
