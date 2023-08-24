<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('home', compact('todos'));
    }

    // Other methods for CRUD operations

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('home')->with('success', 'Todo deleted successfully.');
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->user_id = $user->id; // Assign the user ID to the todo
        $todo->save();

        // return redirect()->route('todos.index');
        return redirect()->route('home');
    }




    // Other methods for CRUD operations
}
