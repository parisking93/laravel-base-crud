<header class="p-5 h-100 position-relative">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('comics.index') }}">Admin</a>
            @if ( Route::currentRouteName() == "comics.index")
                <ul class="nav flex-column ps-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('comics.create') }}">ADD Comic</a>
                    </li>
                </ul>
            @endif
        </li>
        @if ( Route::currentRouteName() == "comics.index")
            <div class="mt-5">
                {{$comic->links()}}
            </div>
        @endif
    </ul>
</header>