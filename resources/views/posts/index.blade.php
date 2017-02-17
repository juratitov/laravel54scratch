@extends('layouts.master')

@section('content')

    @if(Auth::check())
        <a href="/posts/create" class="btn btn-success ml-auto">
            Create
        </a>
        <hr>
    @endif

    @foreach($posts as $post)
        @include('posts.post')
    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

@endsection