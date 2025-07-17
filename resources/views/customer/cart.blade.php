<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Shopping Cart</h1>
                <p class="text-gray-600 mt-2">Review your items before checkout</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Cart Items -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-100">
                            <h3 class="text-lg font-semibold text-gray-900">Cart Items (3)</h3>
                        </div>
                        
                        <div class="divide-y divide-gray-200">
                            @for($i = 1; $i <= 3; $i++)
                            <div class="p-6 flex items-center space-x-4">
                                <div class="w-20 h-20 bg-gradient-to-br from-pink-50 to-rose-50 rounded-xl flex-shrink-0"></div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-900">Product Name {{ $i }}</h4>
                                    <p class="text-sm text-gray-600 mt-1">Color: Pink, Size: Medium</p>
                                    <div class="flex items-center mt-3 space-x-4">
                                        <div class="flex items-center border border-gray-300 rounded-lg">
                                            <button class="p-2 hover:bg-gray-50 transition-colors">
                                                <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"/>
                                                </svg>
                                            </button>
                                            <span class="px-4 py-2 text-sm font-medium">{{ $i }}</span>
                                            <button class="p-2 hover:bg-gray-50 transition-colors">
                                                <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <button class="text-red-600 hover:text-red-700 text-sm font-medium">Remove</button>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-lg font-bold text-gray-900">${{ 39 + $i * 10 }}</p>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 sticky top-24">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Order Summary</h3>
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="font-medium">$147.00</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Shipping</span>
                                <span class="font-medium">$9.99</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">Tax</span>
                                <span class="font-medium">$12.56</span>
                            </div>
                            <div class="border-t border-gray-200 pt-3">
                                <div class="flex justify-between">
                                    <span class="text-base font-semibold text-gray-900">Total</span>
                                    <span class="text-xl font-bold text-pink-600">$169.55</span>
                                </div>
                            </div>
                        </div>

                        <button class="w-full bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white py-3 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg">
                            Proceed to Checkout
                        </button>

                        <button class="w-full mt-3 border border-gray-300 text-gray-700 py-3 rounded-xl font-medium hover:bg-gray-50 transition-colors">
                            Continue Shopping
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>