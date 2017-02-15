@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">
        {{ $post->title  }}
    </h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString()  }}</p>

    {{ $post->body  }}

    <hr>
    <div class="comments">
        @if(count($post->comments))

            @foreach($post->comments as $comment)
                <blockquote class="blockquote blockquote-reverse">
                    <p class="mb-0">{{$comment->body}}</p>
                    <footer class="blockquote-footer">{{ $comment->created_at->diffForHumans() }}</footer>
                </blockquote>
            @endforeach
        @else
            <span class="badge badge-info text-center"> Not comments</span>
        @endif
    </div>
    <hr>

    @include('comments.create')

@endsection