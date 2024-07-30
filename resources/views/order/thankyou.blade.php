<x-layouts.app>
    <div class="flex h-screen items-center justify-center">
        <div class="rounded bg-gradient-to-r from-purple-500 via-green-500 to-blue-500 p-1 shadow-lg">
            <div class="flex flex-col items-center space-y-2 bg-white p-4">
                <svg class="h-28 w-28 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h1
                    class="bg-gradient-to-r from-blue-500 to-purple-500 bg-clip-text text-4xl font-extrabold text-transparent">
                    {{ __('Thank You!') }}
                </h1>
                <p>{{ __('Thank you for your interest! Check your email for a link to the guide.') }}</p>
                <a
                    class="inline-flex items-center rounded rounded-full border border-indigo-600 bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700 focus:outline-none focus:ring">
                    <svg class="mr-2 h-3 w-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                    <span class="text-sm font-medium">
                        Home
                    </span>
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>
