@extends('layouts.master')

@section('content')
    <h1>Register</h1>

    <hr>
    <form method="POST" action="/registration">
        {{ csrf_field() }}

        <div class="form-group">
            @include('layouts.errors')
        </div>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required
                   value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required
                   value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp"
                   required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password retype:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                   aria-describedby="passwordRetypeHelp" required>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>

@endsection