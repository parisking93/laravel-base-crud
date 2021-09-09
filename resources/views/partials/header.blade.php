<header class="p-5">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('comics.index') }}">Admnin</a>
        </li>
        @if ( Route::currentRouteName() == "comics.index")
            <div class="mt-5">
                {{$comic->links()}}
            </div>
        @endif
    </ul>
</header>