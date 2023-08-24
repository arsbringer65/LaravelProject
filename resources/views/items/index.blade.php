<!-- items/index.blade.php -->

@extends('layouts.app')

@section('title', 'Items')

@section('content')
    <h1>Items</h1>

    @if ($items->count() > 0)
        <ul class="item-list">
            @foreach ($items as $item)
                <li class="item-item">
                    <strong>{{ $item->name }}</strong>
                    <form method="POST" action="{{ route('todos.items.destroy', [$todoId, $item->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No items found.</p>
    @endif

    <div class="button-container">
        <a href="{{ route('home') }}" class="back-button">Back</a>
        <a href="{{ route('todos.items.create', $todoId) }}" class="add-button">Add Item</a>

    </div>
@endsection
