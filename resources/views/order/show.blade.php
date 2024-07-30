<x-layouts.app>

    <div class="px-4 py-14 2xl:container md:px-6 2xl:mx-auto 2xl:px-20">
        <div class="item-start flex flex-col justify-start space-y-2">
            <h1 class="text-3xl font-semibold leading-7 text-gray-800 dark:text-white lg:text-4xl lg:leading-9">
                #Order {{ $order->order_id }}</h1>
            <p class="text-base font-medium leading-6 text-gray-600 dark:text-gray-300">
                {{ \Carbon\Carbon::createFromDate($order->created_at)->format('Y-m-d') }}</p>
        </div>
        <div
            class="jusitfy-center mt-10 flex w-full flex-col items-stretch space-y-4 md:space-y-6 xl:flex-row xl:space-x-8 xl:space-y-0">
            <div class="flex w-full flex-col items-start justify-start space-y-4 md:space-y-6 xl:space-y-8">
                <div
                    class="flex w-full flex-col items-start justify-start bg-gray-50 px-4 py-4 dark:bg-gray-800 md:p-6 md:py-6 xl:p-8">
                    <p class="text-lg font-semibold leading-6 text-gray-800 dark:text-white md:text-xl xl:leading-5">
                        Customer’s Cart</p>
                    <div
                        class="mt-4 flex w-full flex-col items-start justify-start md:mt-6 md:flex-row md:items-center md:space-x-6 xl:space-x-8">
                        <div class="w-full pb-4 md:w-40 md:pb-8">
                            <img class="hidden w-full md:block" src="https://i.ibb.co/84qQR4p/Rectangle-10.png"
                                alt="dress" />
                            <img class="w-full md:hidden" src="https://i.ibb.co/L039qbN/Rectangle-10.png"
                                alt="dress" />
                        </div>
                        <div
                            class="flex w-full flex-col items-start justify-between space-y-4 border-b border-gray-200 pb-8 md:flex-row md:space-y-0">
                            <div class="flex w-full flex-col items-start justify-start space-y-8">
                                <h3 class="text-xl font-semibold leading-6 text-gray-800 dark:text-white xl:text-2xl">
                                    Premium Quaility Dress</h3>
                                <div class="flex flex-col items-start justify-start space-y-2">
                                    <p class="text-sm leading-none text-gray-800 dark:text-white"><span
                                            class="text-gray-300 dark:text-gray-400">Style: </span> Italic Minimal
                                        Design</p>
                                    <p class="text-sm leading-none text-gray-800 dark:text-white"><span
                                            class="text-gray-300 dark:text-gray-400">Size: </span> Small</p>
                                    <p class="text-sm leading-none text-gray-800 dark:text-white"><span
                                            class="text-gray-300 dark:text-gray-400">Color: </span> Light Blue</p>
                                </div>
                            </div>
                            <div class="flex w-full items-start justify-between space-x-8">
                                <p class="text-base leading-6 dark:text-white xl:text-lg">$36.00 <span
                                        class="text-red-300 line-through"> $45.00</span></p>
                                <p class="text-base leading-6 text-gray-800 dark:text-white xl:text-lg">01</p>
                                <p class="text-base font-semibold leading-6 text-gray-800 dark:text-white xl:text-lg">
                                    $36.00</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mt-6 flex w-full flex-col items-start justify-start space-y-4 md:mt-0 md:flex-row md:items-center md:space-x-6 xl:space-x-8">
                        <div class="w-full md:w-40">
                            <img class="hidden w-full md:block" src="https://i.ibb.co/s6snNx0/Rectangle-17.png"
                                alt="dress" />
                            <img class="w-full md:hidden" src="https://i.ibb.co/BwYWJbJ/Rectangle-10.png"
                                alt="dress" />
                        </div>
                        <div
                            class="flex w-full flex-col items-start justify-between space-y-4 md:flex-row md:space-y-0">
                            <div class="flex w-full flex-col items-start justify-start space-y-8">
                                <h3 class="text-xl font-semibold leading-6 text-gray-800 dark:text-white xl:text-2xl">
                                    High Quaility Italic Dress</h3>
                                <div class="flex flex-col items-start justify-start space-y-2">
                                    <p class="text-sm leading-none text-gray-800 dark:text-white"><span
                                            class="text-gray-300 dark:text-gray-400">Style: </span> Italic Minimal
                                        Design</p>
                                    <p class="text-sm leading-none text-gray-800 dark:text-white"><span
                                            class="text-gray-300 dark:text-gray-400">Size: </span> Small</p>
                                    <p class="text-sm leading-none text-gray-800 dark:text-white"><span
                                            class="text-gray-300 dark:text-gray-400">Color: </span> Light Blue</p>
                                </div>
                            </div>
                            <div class="flex w-full items-start justify-between space-x-8">
                                <p class="text-base leading-6 dark:text-white xl:text-lg">$20.00 <span
                                        class="text-red-300 line-through"> $30.00</span></p>
                                <p class="text-base leading-6 text-gray-800 dark:text-white xl:text-lg">01</p>
                                <p class="text-base font-semibold leading-6 text-gray-800 dark:text-white xl:text-lg">
                                    $20.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="flex w-full flex-col flex-col items-stretch justify-center space-y-4 md:flex-row md:space-x-6 md:space-y-0 xl:space-x-8">
                    <div class="flex w-full flex-col space-y-6 bg-gray-50 px-4 py-6 dark:bg-gray-800 md:p-6 xl:p-8">
                        <h3 class="text-xl font-semibold leading-5 text-gray-800 dark:text-white">Summary</h3>
                        <div
                            class="flex w-full flex-col items-center justify-center space-y-4 border-b border-gray-200 pb-4">
                            <div class="flex w-full justify-between">
                                <p class="text-base leading-4 text-gray-800 dark:text-white">Subtotal</p>
                                <p class="text-base leading-4 text-gray-600 dark:text-gray-300">$56.00</p>
                            </div>
                            <div class="flex w-full items-center justify-between">
                                <p class="text-base leading-4 text-gray-800 dark:text-white">Discount <span
                                        class="bg-gray-200 p-1 text-xs font-medium leading-3 text-gray-800 dark:bg-white dark:text-gray-800">STUDENT</span>
                                </p>
                                <p class="text-base leading-4 text-gray-600 dark:text-gray-300">-$28.00 (50%)</p>
                            </div>
                            <div class="flex w-full items-center justify-between">
                                <p class="text-base leading-4 text-gray-800 dark:text-white">Shipping</p>
                                <p class="text-base leading-4 text-gray-600 dark:text-gray-300">$8.00</p>
                            </div>
                        </div>
                        <div class="flex w-full items-center justify-between">
                            <p class="text-base font-semibold leading-4 text-gray-800 dark:text-white">Total</p>
                            <p class="text-base font-semibold leading-4 text-gray-600 dark:text-gray-300">$36.00</p>
                        </div>
                    </div>
                    <div
                        class="flex w-full flex-col justify-center space-y-6 bg-gray-50 px-4 py-6 dark:bg-gray-800 md:p-6 xl:p-8">
                        <h3 class="text-xl font-semibold leading-5 text-gray-800 dark:text-white">Shipping</h3>
                        <div class="flex w-full items-start justify-between">
                            <div class="flex items-center justify-center space-x-4">
                                <div class="h-8 w-8">
                                    <img class="h-full w-full" src="https://i.ibb.co/L8KSdNQ/image-3.png"
                                        alt="logo" />
                                </div>
                                <div class="flex flex-col items-center justify-start">
                                    <p class="text-lg font-semibold leading-6 text-gray-800 dark:text-white">DPD
                                        Delivery<br /><span class="font-normal">Delivery with 24 Hours</span></p>
                                </div>
                            </div>
                            <p class="text-lg font-semibold leading-6 text-gray-800 dark:text-white">$8.00</p>
                        </div>
                        <div class="flex w-full items-center justify-center">
                            <button
                                class="w-96 bg-gray-800 py-5 text-base font-medium leading-4 text-white hover:bg-black focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 md:w-full">View
                                Carrier Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="flex w-full flex-col items-center justify-between bg-gray-50 px-4 py-6 dark:bg-gray-800 md:items-start md:p-6 xl:w-96 xl:p-8">
                <h3 class="text-xl font-semibold leading-5 text-gray-800 dark:text-white">Customer</h3>
                <div
                    class="flex h-full w-full flex-col items-stretch justify-start md:flex-row md:space-x-6 lg:space-x-8 xl:flex-col xl:space-x-0">
                    <div class="flex flex-shrink-0 flex-col items-start justify-start">
                        <div
                            class="flex w-full items-center justify-center space-x-4 border-b border-gray-200 py-8 md:justify-start">
                            <img src="https://i.ibb.co/5TSg7f6/Rectangle-18.png" alt="avatar" />
                            <div class="flex flex-col items-start justify-start space-y-2">
                                <p class="text-left text-base font-semibold leading-4 text-gray-800 dark:text-white">
                                    David Kent</p>
                                <p class="text-sm leading-5 text-gray-600 dark:text-gray-300">10 Previous Orders</p>
                            </div>
                        </div>

                        <div
                            class="flex w-full items-center justify-center space-x-4 border-b border-gray-200 py-4 text-gray-800 dark:text-white md:justify-start">
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1.svg"
                                alt="email">
                            <img class="hidden dark:block"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/order-summary-3-svg1dark.svg"
                                alt="email">
                            <p class="cursor-pointer text-sm leading-5">david89@gmail.com</p>
                        </div>
                    </div>
                    <div class="mt-6 flex w-full flex-col items-stretch justify-between md:mt-0 xl:h-full">
                        <div
                            class="flex flex-col items-center justify-center space-y-4 md:flex-row md:items-start md:justify-start md:space-x-6 md:space-y-0 lg:space-x-8 xl:flex-col xl:space-x-0 xl:space-y-12">
                            <div
                                class="flex flex-col items-center justify-center space-y-4 md:items-start md:justify-start xl:mt-8">
                                <p
                                    class="text-center text-base font-semibold leading-4 text-gray-800 dark:text-white md:text-left">
                                    Shipping Address</p>
                                <p
                                    class="w-48 text-center text-sm leading-5 text-gray-600 dark:text-gray-300 md:text-left lg:w-full xl:w-48">
                                    180 North King Street, Northhampton MA 1060</p>
                            </div>
                            <div
                                class="flex flex-col items-center justify-center space-y-4 md:items-start md:justify-start">
                                <p
                                    class="text-center text-base font-semibold leading-4 text-gray-800 dark:text-white md:text-left">
                                    Billing Address</p>
                                <p
                                    class="w-48 text-center text-sm leading-5 text-gray-600 dark:text-gray-300 md:text-left lg:w-full xl:w-48">
                                    180 North King Street, Northhampton MA 1060</p>
                            </div>
                        </div>
                        <div class="flex w-full items-center justify-center md:items-start md:justify-start">
                            <button
                                class="mt-6 w-96 border border-gray-800 py-5 text-base font-medium font-medium leading-4 text-gray-800 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 dark:border-white dark:bg-transparent dark:text-white dark:hover:bg-gray-900 md:mt-0 2xl:w-full">Edit
                                Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
