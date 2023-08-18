<footer class="text-gray-400">
    <p>
        &copy; Copyright {{ date('Y') }} 

        @if(!Route::is('about'))
            &middot; <a href="{{ route('about') }}" class="text-indigo-500 hover:text-indigo-600 underline">About Us</a>
        @endif
    </p>
</footer>