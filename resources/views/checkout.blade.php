<x-layouts.app>
    <div class="container mx-auto px-6">
        <h3 class="text-2xl font-medium text-gray-700">Checkout</h3>
        <div class="mt-8 flex flex-col lg:flex-row">
            <div class="order-2 w-full lg:w-1/2">
                <div class="flex items-center">
                    <button class="flex text-sm text-blue-500 focus:outline-none"><span
                            class="mr-2 flex h-5 w-5 items-center justify-center rounded-full bg-blue-500 text-white">1</span>
                        Contacts</button>
                    <button class="ml-8 flex text-sm text-gray-700 focus:outline-none"><span
                            class="mr-2 flex h-5 w-5 items-center justify-center rounded-full border-2 border-blue-500">2</span>
                        Shipping</button>
                    <button class="ml-8 flex text-sm text-gray-500 focus:outline-none" disabled><span
                            class="mr-2 flex h-5 w-5 items-center justify-center rounded-full border-2 border-gray-500">3</span>
                        Payments</button>
                </div>
                <form class="mt-8 lg:w-3/4">
                    <div>
                        <h4 class="text-sm font-medium text-gray-500">Delivery method</h4>
                        <div class="mt-6">
                            <button
                                class="flex w-full items-center justify-between rounded-md border-2 border-blue-500 bg-white p-4 focus:outline-none">
                                <label class="flex items-center">
                                    <input class="form-radio h-5 w-5 text-blue-600" type="radio" checked><span
                                        class="ml-2 text-sm text-gray-700">MS Delivery</span>
                                </label>

                                <span class="text-sm text-gray-600">$18</span>
                            </button>
                            <button
                                class="mt-6 flex w-full items-center justify-between rounded-md border bg-white p-4 focus:outline-none">
                                <label class="flex items-center">
                                    <input class="form-radio h-5 w-5 text-blue-600" type="radio"><span
                                        class="ml-2 text-sm text-gray-700">DC Delivery</span>
                                </label>

                                <span class="text-sm text-gray-600">$26</span>
                            </button>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h4 class="text-sm font-medium text-gray-500">Delivery address</h4>
                        <div class="mt-6 flex">
                            <label class="block w-3/12">
                                <select
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                    <option>NY</option>
                                    <option>DC</option>
                                    <option>MH</option>
                                    <option>MD</option>
                                </select>
                            </label>
                            <label class="ml-3 block flex-1">
                                <input
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                                    type="text" placeholder="Address">
                            </label>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h4 class="text-sm font-medium text-gray-500">Date</h4>
                        <div class="mt-6 flex">
                            <label class="block flex-1">
                                <input
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                                    type="date" placeholder="Date">
                            </label>
                        </div>
                    </div>
                    <div class="mt-8 flex items-center justify-between">
                        <button
                            class="flex items-center rounded text-sm font-medium text-gray-700 hover:underline focus:outline-none">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                            </svg>
                            <span class="mx-2">Back step</span>
                        </button>
                        <button
                            class="flex items-center rounded-md bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-500 focus:bg-blue-500 focus:outline-none">
                            <span>Payment</span>
                            <svg class="mx-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="order-1 mb-8 w-full flex-shrink-0 lg:order-2 lg:mb-0 lg:w-1/2">
                <div class="flex justify-center lg:justify-end">
                    <div class="w-full max-w-md rounded-md border px-4 py-3">
                        <div class="flex items-center justify-between">
                            <h3 class="font-medium text-gray-700">Order total (2)</h3>
                            <span class="text-sm text-gray-600">Edit</span>
                        </div>
                        <div class="mt-6 flex justify-between">
                            <div class="flex">
                                <img class="h-20 w-20 rounded object-cover"
                                    src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
                                    alt="">
                                <div class="mx-3">
                                    <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
                                    <div class="mt-2 flex items-center">
                                        <button class="text-gray-500 focus:text-gray-600 focus:outline-none">
                                            <svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                                                </path>
                                            </svg>
                                        </button>
                                        <span class="mx-2 text-gray-700">2</span>
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
                            <span class="text-gray-600">20$</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
