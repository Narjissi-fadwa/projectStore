<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-pink-100 via-rose-50 to-orange-100 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                    Discover Amazing
                    <span class="bg-gradient-to-r from-pink-600 to-rose-600 bg-clip-text text-transparent">Products</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Find everything you need in our curated collection of quality products at unbeatable prices.</p>
                <button class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-8 py-4 rounded-full text-lg font-semibold shadow-lg hover:shadow-xl transition-all duration-300">
                    Shop Now
                </button>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Shop by Category</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach(['Electronics', 'Fashion', 'Home & Garden', 'Sports'] as $category)
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100 group cursor-pointer">
                    <div class="w-16 h-16 bg-gradient-to-r from-pink-100 to-rose-100 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">{{ $category }}</h3>
                    <p class="text-sm text-gray-600">Explore our {{ strtolower($category) }} collection</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Featured Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @for($i = 1; $i <= 8; $i++)
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 overflow-hidden group">
                    <div class="aspect-square bg-gradient-to-br from-pink-50 to-rose-50 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-pink-200/20 to-rose-200/20"></div>
                        <div class="absolute top-4 right-4">
                            <button class="w-8 h-8 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors">
                                <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-900 mb-2">Product Name {{ $i }}</h3>
                        <p class="text-sm text-gray-600 mb-4">Beautiful product description that highlights key features.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-pink-600">${{ 29 + $i * 10 }}</span>
                            <button class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-md">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>
</x-app-layout>