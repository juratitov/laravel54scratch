@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">
        {{ $post->title  }}
    </h2>
    <p class="blog-post-meta">{{ $post->user->name }} on {{ $post->created_at->toFormattedDateString()  }}</p>

    {{ $post->body  }}

    <hr>
    <div class="comments">
        @if(count($post->comments))

            @foreach($post->comments as $comment)
                <span class="small pull-left">{{ $comment->user->name }} say:</span>
                <blockquote class="blockquote">
                    <p class="mb-0">{{$comment->body}}</p>
                    <footer class="blockquote-footer"><span
                                class="small">{{ $comment->created_at->diffForHumans() }}</span></footer>
                </blockquote>
            @endforeach
        @else
            <span class="badge badge-info text-center"> Not comments</span>
        @endif
    </div>
    <hr>

    @include('comments.create')

@endsection