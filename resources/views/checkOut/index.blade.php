<x-layouts.app>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <div class="flex flex-col items-center border-b bg-white py-4 sm:flex-row sm:px-10 lg:px-20 xl:px-32">
            <a class="text-2xl font-bold text-gray-800" href="#">Checkout</a>
            <div class="mt-4 py-2 text-xs sm:ml-auto sm:mt-0 sm:text-base">
                <div class="relative">
                    <ul class="relative flex w-full items-center justify-between space-x-2 sm:space-x-4">
                        <li class="flex items-center space-x-3 text-left sm:space-x-4">
                            <a class="flex h-6 w-6 items-center justify-center rounded-full bg-emerald-200 text-xs font-semibold text-emerald-700"
                                href="#"><svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg></a>
                            <span class="font-semibold text-gray-900">Shop</span>
                        </li>
                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                        <li class="flex items-center space-x-3 text-left sm:space-x-4">
                            <a class="flex h-6 w-6 items-center justify-center rounded-full bg-gray-600 text-xs font-semibold text-white ring ring-gray-600 ring-offset-2"
                                href="#">2</a>
                            <span class="font-semibold text-gray-900">Shipping</span>
                        </li>
                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                        <li class="flex items-center space-x-3 text-left sm:space-x-4">
                            <a class="flex h-6 w-6 items-center justify-center rounded-full bg-gray-400 text-xs font-semibold text-white"
                                href="#">3</a>
                            <span class="font-semibold text-gray-500">Payment</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
            <div class="px-4 pt-8">
                <p class="text-xl font-medium">Order Summary</p>
                <p class="text-gray-400">Check your items. And select a suitable shipping method.</p>
                <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
                    @foreach ($cart->products as $product)
                        <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                            <img class="m-2 h-24 w-28 rounded-md border object-cover object-center"
                                src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                alt="" />
                            <div class="flex w-full flex-col px-4 py-4">
                                <span class="font-semibold">{{ $product->product->name }}</span>
                                <span class="float-right text-gray-400">{{ $product->quantity }}
                                    {{ __('db') }}</span>
                                <p class="text-lg font-bold">{{ $product->product->regular_price }} ,-Ft.</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="px-4 pt-8">
                <p class="mt-8 text-lg font-medium">Shipping Methods</p>
                <div class="mt-5 grid gap-6">
                    @foreach (\App\enums\ShippingMethods::getValues() as $method)
                        <div class="relative">
                            <input class="peer hidden" id="shipping_{{ $method }}" name="shipping[lines_method]"
                                type="radio" value="{{ $method }}" @checked ($loop->first) />
                            <span
                                class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-gray-700"></span>
                            <label
                                class="flex cursor-pointer select-none rounded-lg border border-gray-300 p-4 peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50"
                                for="shipping_{{ $method }}">
                                <img class="w-14 object-contain" src="/images/naorrAeygcJzX0SyNI4Y0.png"
                                    alt="" />
                                <div class="ml-5">
                                    <span
                                        class="mt-2 font-semibold">{{ Str::title(Str::replace('_', ' ', $method)) }}</span>
                                </div>
                            </label>
                        </div>
                    @endforeach
                </div>
                @error('lines_method')
                    <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="px-4 pt-8">
                <p class="text-xl font-medium">Order Billing details</p>
                <p class="mt-8 text-lg font-medium">Billing details</p>
                <div class="mt-5 grid gap-6">
                    <div class="relative">
                        <input
                            class="form-input w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="first_name" name="billing[first_name]" type="text" placeholder="First Name" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        @error('billing[first_name]')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="last_name" name="billing[last_name]" type="text" placeholder="Last Name" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        @error('billing[last_name]')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="email" name="billing[email]" type="email" placeholder="Email" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        @error('billing[email]')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="phone" name="billing[phone]" type="phone" placeholder="Phone" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="address_1" name="billing[address_1]" type="text" placeholder="Address 1" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-4 w-4 object-contain"
                                src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg"
                                alt="" />
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="address_2" name="billing[address_2]" type="text" placeholder="Address 2" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-4 w-4 object-contain"
                                src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg"
                                alt="" />
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="city" name="billing[city]" type="text" placeholder="City" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-4 w-4 object-contain"
                                src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg"
                                alt="" />
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="country" name="billing[country]" type="text" placeholder="Country" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-4 w-4 object-contain"
                                src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg"
                                alt="" />
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="state" name="billing[state]" type="text" placeholder="State" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-4 w-4 object-contain"
                                src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg"
                                alt="" />
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="postcode" name="billing[postcode]" type="text" placeholder="Postcode" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-4 w-4 object-contain"
                                src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 pt-8">
                <p class="text-xl font-medium">Order Shipping details</p>
                <p class="mt-8 text-lg font-medium">Shipping details</p>
                <div class="mt-5 grid gap-6">
                    <div class="relative">
                        <input
                            class="form-input w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="shipping_first_name" name="shipping[first_name]" type="text"
                            placeholder="First Name" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="shipping_last_name" name="shipping[last_name]" type="text"
                            placeholder="Last Name" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="shipping_address_1" name="shipping[address_1]" type="text"
                            placeholder="Address 1" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-4 w-4 object-contain"
                                src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg"
                                alt="" />
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="shipping_address_2" name="shipping[address_2]" type="text"
                            placeholder="Address 2" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-4 w-4 object-contain"
                                src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg"
                                alt="" />
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="shipping_city" name="shipping[city]" type="text" placeholder="City" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-4 w-4 object-contain"
                                src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg"
                                alt="" />
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="shipping_state" name="shipping[state]" type="text" placeholder="State" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-4 w-4 object-contain"
                                src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg"
                                alt="" />
                        </div>
                    </div>

                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="shipping_postcode" name="shipping[postcode]" type="text"
                            placeholder="Postcode" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-4 w-4 object-contain"
                                src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg"
                                alt="" />
                        </div>
                    </div>
                    <div class="relative">
                        <input
                            class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                            id="shipping_country" name="shipping[country]" type="text" placeholder="Country" />
                        <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                            <img class="h-4 w-4 object-contain"
                                src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg"
                                alt="" />
                        </div>
                    </div>

                </div>
                <!-- Total -->
                <div class="mt-6 border-b border-t py-2">
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-900">Subtotal</p>
                        <p class="font-semibold text-gray-900">
                            {{ App\Http\Controllers\CartController::getCartTotal() }}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-gray-900">Shipping</p>
                        <p class="font-semibold text-gray-900">$8.00</p>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-between">
                    <p class="text-sm font-medium text-gray-900">Total</p>
                    <p class="text-2xl font-semibold text-gray-900">$407.00</p>
                </div>
            </div>
            <button class="mb-8 mt-4 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white"
                type="submit">Place
                Order</button>
        </div>
    </form>
</x-layouts.app>
