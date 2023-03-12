<footer>
        <p>
            <span class="text-secondary">&copy; Copyright {{date('Y')}} Mathieu Pithon all right reserved
                @if (! Route::is('gestion'))
                &middot; <a href="{{ route('gestion') }}"> About me </a>
                @endif
        </p>
        {{date('H\hi')}}
    </footer>