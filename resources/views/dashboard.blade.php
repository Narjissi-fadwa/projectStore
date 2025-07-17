<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Welcome back!</h1>
            </div>
            
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-pink-50 to-rose-50">
                    <h3 class="text-lg font-semibold text-gray-900">Dashboard</h3>
                    <p class="text-sm text-gray-600 mt-1">You're successfully logged in to ShopEase!</p>
                </div>
                
                <div class="p-6">
                    <div class="text-center py-8">
                        
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Welcome to ShopEase!</h4>
                        <p class="text-gray-600 mb-6">You're logged in and ready to explore our amazing products.</p>
                        
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            @if(auth()->user()->role === 'seller')
                                <a href="{{ route('seller.dashboard') }}" class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg">
                                    Go to Seller Dashboard
                                </a>
                            @elseif(auth()->user()->role === 'admin')
                                <a href="{{ route('admin.dashboard') }}" class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg">
                                    Go to Admin Dashboard
                                </a>
                            @else
                                <a href="#" class="bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg">
                                    Start Shopping
                                </a>
                            @endif
                            
                            <a href="{{ route('profile.edit') }}" class="border border-gray-300 text-gray-700 px-6 py-3 rounded-xl font-medium hover:bg-gray-50 transition-colors">
                                Edit Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</x-app-layout>

