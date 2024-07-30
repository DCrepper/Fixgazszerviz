<x-layouts.app>
    <div class="container mx-auto px-6">
        <h3 class="text-2xl font-medium text-gray-700">Checkout</h3>
        <div class="mt-8 flex flex-col lg:flex-row">
            @foreach ($cart->products as $cartItem)
                <div class="order-1 mb-8 w-full flex-shrink-0 lg:order-2 lg:mb-0 lg:w-1/2">
                    <div class="flex justify-center lg:justify-end">
                        <div class="w-full max-w-md rounded-md border px-4 py-3">
                            <div class="flex items-center justify-between">
                                <h3 class="font-medium text-gray-700">Order total (2)</h3>
                                <form action="{{ route('cart.remove', ['product' => $cartItem->product->id]) }}"
                                    method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"> <span
                                            class="text-sm text-gray-600">{{ __('X') }}</span>
                                    </button>
                                </form>
                            </div>
                            <div class="mt-6 flex justify-between">
                                <div class="flex">
                                    <img class="h-20 w-20 rounded object-cover"
                                        src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
                                        alt="">
                                    <div class="mx-3">

                                        <h3 class="text-sm text-gray-600"> {{ $cartItem->product->name }}</h3>
                                        <div class="mt-2 flex items-center">
                                            <button class="text-gray-500 focus:text-gray-600 focus:outline-none">
                                                <svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path
                                                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <span class="mx-2 text-gray-700"> {{ $cartItem->quantity }}</span>
                                            <button class="text-gray-500 focus:text-gray-600 focus:outline-none">
                                                <svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-gray-600"> {{ $cartItem->product->regular_price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('checkout.index') }}" wire:navigate>
            <button class="mt-8 w-full bg-gray-900 py-3 text-lg uppercase text-white">Checkout</button>
        </a>
    </div>
</x-layouts.app>
