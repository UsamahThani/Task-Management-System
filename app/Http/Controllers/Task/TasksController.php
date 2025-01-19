<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('tasks')->with('success', 'Task created successfully!');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:pending,in_progress,completed'
        ]);

        $task = Task::findOrFail($id);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'updated_at' => now()
        ]);

        return redirect()->route('tasks')->with('success', 'Task updated successfully!');
    }

    public function delete($id)
    {
        session()->flash('confirmToast', 'Are you sure you want to delete this task?');
        return redirect()->route('tasks');
    }

    public function destroy($id)
    {
        // Remove all session keys set in the delete function
        session()->forget(['confirmToast']);

        $task = Task::find($id);
        if ($task) {
            // Delete the task
            $task->delete();
        }
        return redirect()->route('tasks')->with('error', 'Task deleted successfully!');
    }
}
