@extends('layouts.master')

@section('content')
    <h1>Publish a Post</h1>

    <hr>
    <form method="POST" action="/posts">
        {{ csrf_field() }}

        <div class="form-group">
            @include('layouts.errors')
        </div>

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>
    </form>

@endsection