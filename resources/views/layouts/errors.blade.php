@if($count = count($errors))
    <div class="alert alert-danger" role="alert">
        @if($count < 2)
            <strong>Oh snap!</strong> {{ $errors->first('message') }}
        @else
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endif