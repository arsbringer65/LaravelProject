<!-- items/create.blade.php -->

@extends('layouts.app')

@section('title', 'Add Item')

@section('content')
    <h1>Add Item to: {{ $todo->title }}</h1>

    <form method="POST" action="{{ route('todos.items.store', $todo->id) }}">
        @csrf
        <div>
            <input type="text" id="name" name="name" required class="form-input" placeholder="List Name">
        </div>
        <a class="back-button" href="{{ route('items.index', $todo->id) }}">Back</a>
        <button class="submit-button" type="submit">Add Item</button>

    </form>


@endsection
