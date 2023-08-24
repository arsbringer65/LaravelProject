<!-- create_todo.blade.php -->

@extends('app')

@section('title', 'Create Todo')

@section('content')
    <h1>Create Todo</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf

        <label for="title">Title:
            <br>
            <input type="text" name="title" id="title" required>

        </label>

        <br><br>

        <label for="description">Description:
            <br>
            <textarea name="description" id="description" rows="10" cols="80%"></textarea>
        </label>


        <br><br>

        <button type="submit" class="btn-create">Create</button>
    </form>
@endsection
