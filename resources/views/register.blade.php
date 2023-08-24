<!-- register.blade.php -->

@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="card">
            <h1>Register</h1>

            <form method="POST" action="{{ route('register') }}">
                @csrf


                <input type="text" name="name" id="name" required placeholder="Name" class="form-input">

                <br><br>

                <input type="email" name="email" id="email" required placeholder="Email" class="form-input">

                <br><br>


                <input type="password" name="password" id="password" required placeholder="Password" class="form-input">

                <br><br>

                <input type="password" name="password_confirmation" id="password_confirmation" required
                    placeholder="Confirm Password" class="form-input">

                <br><br>

                <button type="submit" class="submit-button">Register</button>
            </form>
            <p>Already have an account? <a href="{{ route('login') }}">Click here!</a></p>
        </div>
    </div>
@endsection
