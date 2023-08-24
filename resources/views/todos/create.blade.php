<!-- create.blade.php -->
@extends('layouts.app')

@section('title', 'Add Todo')

@section('content')
    <h1>Add Todo</h1>

    <form method="POST" action="{{ route('todos.store') }}">
        @csrf
        <div>
            <input type="text" name="title" id="title" placeholder="Title" class="form-input">
        </div>

        <div>
            {{-- <textarea name="description" id="description" rows="4" placeholder="Description" class="form-textarea"></textarea> --}}
            <input type="text" name="description" id="description" placeholder="Description"
                class="form-textarea form-input">
        </div>

        <a class="back-button" href="{{ route('home') }}">Back</a>
        <button class="submit-button" type="submit">Add</button>
    </form>
@endsection
