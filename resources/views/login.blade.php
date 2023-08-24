<!-- login.blade.php -->

@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="card">
            <h1>Please Login</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <input type="email" name="email" id="email" required placeholder="Email" class="form-input">

                <br><br>

                <input type="password" name="password" id="password" required placeholder="Password" class="form-input">

                <br><br>

                <button type="submit" class="submit-button">Login</button>
            </form>

            <p>Don't have an account? <a href="{{ route('register') }}">Click here!</a></p>
        </div>
    </div>
@endsection
