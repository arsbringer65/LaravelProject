@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Welcome, {{ Auth::user()->name }}</h1>

    <h2>Todos</h2>

    @if ($todos->count() > 0)
        <ul class="todo-list">
            @foreach ($todos as $todo)
                <li class="todo-item">
                    <strong class="todo-title">
                        <a href="{{ route('items.index', $todo->id) }}">
                            {{ $todo->title }}
                        </a>
                    </strong>
                    <form method="POST" action="{{ route('todos.destroy', $todo->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No todos found.</p>
    @endif

    <div class="button-container">
        <a href="{{ route('todos.create') }}" class="add-button">Add Todo</a>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-button">Logout</button>
    </form>
@endsection
