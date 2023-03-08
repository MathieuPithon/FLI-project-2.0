<footer>
        <p>
            <span class="text-secondary">&copy; Copyright {{date('Y')}} Mathieu Pithon all right reserved
                @if (! Route::is('about'))
                &middot; <a href="{{ route('about') }}"> About me </a>
                @endif
        </p>
    </footer>