<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Todo;

class ItemController extends Controller
{
    public function index($todoId)
    {
        $items = Item::where('todo_id', $todoId)->get(); // Fetch items for the given todo

        return view('items.index', compact('items', 'todoId'));
    }

    public function destroy($todoId, $itemId)
    {
        $item = Item::find($itemId); // Find the item to delete
        $item->delete();

        return redirect()->route('items.index', $todoId)->with('success', 'Item deleted successfully.');
    }

    public function create($todoId)
    {
        $todo = Todo::findOrFail($todoId);

        return view('items.create', compact('todo'));
    }

    public function store(Request $request, $todoId)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $item = new Item();
        $item->name = $request->input('name');
        $item->status = 'pending';
        $item->todo_id = $todoId;
        $item->save();

        return redirect()->route('items.index', $todoId)->with('success', 'Item created successfully.');
    }
}
