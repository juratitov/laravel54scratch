@if($count = count($errors))
    <div class="alert alert-danger" role="alert">
        @if($count < 2)
            <strong>Oh snap!</strong>
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        @else
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endif