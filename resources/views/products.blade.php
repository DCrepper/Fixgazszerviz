<x-layouts.app>

    <div class="container mx-auto px-6">
        <h3 class="text-2xl font-medium text-gray-700">Wrist Watch</h3>
        <span class="mt-3 text-sm text-gray-500">200+ Products</span>
        <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                <div class="mx-auto w-full max-w-sm overflow-hidden rounded-md shadow-md">
                    <div class="flex h-56 w-full items-end justify-end bg-cover"
                        style="background-image: url('https://images.unsplash.com/photo-1524592094714-0f0654e20314?ixlib=rb-1.2.1&auto=format&fit=crop&w=689&q=80')">
                        <form action="{{ route('cart.add', ['product' => $product->id]) }}" method="post">
                            @csrf
                            <button
                                class="mx-5 -mb-4 rounded-full bg-blue-600 p-2 text-white hover:bg-blue-500 focus:bg-blue-500 focus:outline-none">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="uppercase text-gray-700">{{ $product->name }}</h3>
                        <span class="mt-2 text-gray-500">{{ $product->regular_price }} Ft.</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center">
            <div class="mt-8 flex rounded-md">
                <a class="ml-0 rounded-l border border-r-0 border-gray-200 bg-white px-4 py-2 leading-tight text-blue-700 hover:bg-blue-500 hover:text-white"
                    href="#"><span>Previous</a></a>
                <a class="border border-r-0 border-gray-200 bg-white px-4 py-2 leading-tight text-blue-700 hover:bg-blue-500 hover:text-white"
                    href="#"><span>1</span></a>
                <a class="border border-r-0 border-gray-200 bg-white px-4 py-2 leading-tight text-blue-700 hover:bg-blue-500 hover:text-white"
                    href="#"><span>2</span></a>
                <a class="border border-r-0 border-gray-200 bg-white px-4 py-2 leading-tight text-blue-700 hover:bg-blue-500 hover:text-white"
                    href="#"><span>3</span></a>
                <a class="rounded-r border border-gray-200 bg-white px-4 py-2 leading-tight text-blue-700 hover:bg-blue-500 hover:text-white"
                    href="#"><span>Next</span></a>
            </div>
        </div>
    </div>
</x-layouts.app>
