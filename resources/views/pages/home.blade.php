<x-app>
{{--    @if (Route::has('login'))--}}
{{--        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--        @auth--}}
{{--                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
{{--            @else--}}
{{--                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    @endif--}}
    <header class="px-[26px] pt-[26px]">
        <nav class="relative flex justify-between items-center z-10">
            <x-logo></x-logo>
            <div class="cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="37.364" height="24.654" viewBox="0 0 37.364 24.654"><g transform="translate(-4.188 -8.688)"><path d="M6.188,25.313H39.552" transform="translate(0 6.029)" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"/><path d="M6.188,18H39.552" transform="translate(0 3.014)" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"/><path d="M6.188,10.688H39.552" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"/></g></svg>
            </div>
        </nav>

        <x-backgrounds.home-top-right-blob></x-backgrounds.home-top-right-blob>
    </header>
</x-app>
