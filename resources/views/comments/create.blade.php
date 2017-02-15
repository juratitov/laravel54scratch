<form method="POST" action="/posts/{{ $post->id }}/comments">
    {{ csrf_field() }}

    <div class="form-group">
        @include('layouts.errors')
    </div>

    <div class="form-group">
        <textarea name="body" class="form-control" id="body" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Comment</button>
</form>