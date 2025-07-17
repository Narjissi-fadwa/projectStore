<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Our Products</h1>
                <p class="text-gray-600 mt-2">Discover our curated collection of quality products</p>
            </div>

            <!-- Filters -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-8">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex flex-col sm:flex-row gap-4">
                        <!-- Category Filter -->
                        <div class="relative">
                            <select class="appearance-none bg-white border border-gray-300 rounded-xl px-4 py-2 pr-8 text-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                                <option value="">All Categories</option>
                                <option value="electronics">Electronics</option>
                                <option value="fashion">Fashion</option>
                                <option value="beauty">Beauty & Care</option>
                                <option value="home">Home & Garden</option>
                                <option value="sports">Sports & Fitness</option>
                                <option value="books">Books & Media</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Price Range Filter -->
                        <div class="relative">
                            <select class="appearance-none bg-white border border-gray-300 rounded-xl px-4 py-2 pr-8 text-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                                <option value="">All Prices</option>
                                <option value="0-25">Under $25</option>
                                <option value="25-50">$25 - $50</option>
                                <option value="50-100">$50 - $100</option>
                                <option value="100-200">$100 - $200</option>
                                <option value="200+">$200+</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="relative">
                        <input type="text" placeholder="Search products..." class="bg-white border border-gray-300 rounded-xl px-4 py-2 pl-10 text-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent w-full md:w-64">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Electronics -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden group">
                    <div class="h-48 bg-gradient-to-br from-blue-50 to-indigo-50 relative flex items-center justify-center">
                        
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Wireless Bluetooth Headphones</h3>
                        <p class="text-sm text-gray-600 mb-4">Premium sound quality with active noise cancellation and 30-hour battery life.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-pink-600">$89.99</span>
                            <button class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-md">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden group">
                    <div class="h-48 bg-gradient-to-br from-purple-50 to-pink-50 relative flex items-center justify-center">
                        
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Smartphone Pro Max 256GB</h3>
                        <p class="text-sm text-gray-600 mb-4">Latest flagship smartphone with advanced camera system and lightning-fast performance.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-pink-600">$899.99</span>
                            <button class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-md">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Fashion -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden group">
                    <div class="h-48 bg-gradient-to-br from-rose-50 to-pink-50 relative flex items-center justify-center">
                        
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Classic Cotton T-Shirt</h3>
                        <p class="text-sm text-gray-600 mb-4">Comfortable everyday essential made from 100% organic cotton. Available in multiple colors.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-pink-600">$24.99</span>
                            <button class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-md">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden group">
                    <div class="h-48 bg-gradient-to-br from-amber-50 to-orange-50 relative flex items-center justify-center">
                        
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Leather Crossbody Bag</h3>
                        <p class="text-sm text-gray-600 mb-4">Elegant genuine leather bag perfect for daily use. Features adjustable strap and multiple compartments.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-pink-600">$79.99</span>
                            <button class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-md">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Beauty -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden group">
                    <div class="h-48 bg-gradient-to-br from-emerald-50 to-teal-50 relative flex items-center justify-center">
                        
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Hydrating Face Serum</h3>
                        <p class="text-sm text-gray-600 mb-4">Advanced anti-aging serum with hyaluronic acid and vitamin C for radiant, youthful skin.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-pink-600">$45.99</span>
                            <button class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-md">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden group">
                    <div class="h-48 bg-gradient-to-br from-violet-50 to-purple-50 relative flex items-center justify-center">
                        
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Luxury Perfume Collection</h3>
                        <p class="text-sm text-gray-600 mb-4">Exquisite fragrance with notes of jasmine, vanilla, and sandalwood. Long-lasting scent.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-pink-600">$129.99</span>
                            <button class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-md">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Home & Garden -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden group">
                    <div class="h-48 bg-gradient-to-br from-green-50 to-emerald-50 relative flex items-center justify-center">
                       
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Ceramic Plant Pot Set</h3>
                        <p class="text-sm text-gray-600 mb-4">Beautiful handcrafted ceramic pots with drainage holes. Perfect for indoor plants and herbs.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-pink-600">$34.99</span>
                            <button class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-md">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden group">
                    <div class="h-48 bg-gradient-to-br from-orange-50 to-red-50 relative flex items-center justify-center">
                        
                        
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Scented Candle Collection</h3>
                        <p class="text-sm text-gray-600 mb-4">Premium soy wax candles with relaxing lavender and vanilla scents. 40-hour burn time.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-pink-600">$28.99</span>
                            <button class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-md">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-white border border-gray-300 text-gray-700 px-8 py-3 rounded-xl font-medium hover:bg-gray-50 transition-colors">
                    Load More Products
                </button>
            </div>
        </div>
    </div>
</x-app-layout>