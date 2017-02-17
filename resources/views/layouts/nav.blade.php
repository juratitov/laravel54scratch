<div class="blog-masthead">
    <div class="container">

        <nav class="nav navbar-left">
            <a class="nav-link active" href="/posts">Posts</a>

            @if(Auth::check())
                <a class="nav-link ml-auto" href="/logout">{{ Auth::user()->name }}, Logout</a>
            @else
                <a class="nav-link ml-auto" href="/login">Login</a>
                <a class="nav-link" href="/registration">SignUp</a>
            @endif
        </nav>
    </div>
</div>
