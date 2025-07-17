<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Add New Product</h1>
                <p class="text-gray-600 mt-2">Create a new product listing for your store</p>
            </div>

            
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-100 bg-gradient-to-r from-pink-50 to-rose-50">
                    <h3 class="text-lg font-semibold text-gray-900">Product Information</h3>
                    <p class="text-sm text-gray-600 mt-1">Fill in the details below to add your product</p>
                </div>

                <form class="p-6 space-y-6">
                    
                    <div>
                        <label for="product_name" class="block text-sm font-medium text-gray-700 mb-2">
                            Product Name <span class="text-pink-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="product_name" 
                            name="product_name" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                            placeholder="Enter product name"
                        >
                    </div>

                    
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Description <span class="text-pink-500">*</span>
                        </label>
                        <textarea 
                            id="description" 
                            name="description" 
                            rows="4" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200 resize-none"
                            placeholder="Describe your product features and benefits"
                        ></textarea>
                    </div>

                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700 mb-2">
                                Price <span class="text-pink-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 text-lg">$</span>
                                </div>
                                <input 
                                    type="number" 
                                    id="price" 
                                    name="price" 
                                    step="0.01" 
                                    min="0" 
                                    required
                                    class="w-full pl-8 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                                    placeholder="0.00"
                                >
                            </div>
                        </div>

                        
                        <div>
                            <label for="quantity" class="block text-sm font-medium text-gray-700 mb-2">
                                Quantity Available <span class="text-pink-500">*</span>
                            </label>
                            <input 
                                type="number" 
                                id="quantity" 
                                name="quantity" 
                                min="0" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                                placeholder="Enter quantity"
                            >
                        </div>
                    </div>
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
                            Category <span class="text-pink-500">*</span>
                        </label>
                        <div class="relative">
                            <select 
                                id="category" 
                                name="category" 
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200 appearance-none bg-white"
                            >
                                <option value="">Select a category</option>
                                <option value="electronics">Electronics</option>
                                <option value="fashion">Fashion</option>
                                <option value="beauty">Beauty & Care</option>
                                <option value="home">Home & Garden</option>
                                <option value="sports">Sports & Fitness</option>
                                <option value="books">Books & Media</option>
                                <option value="toys">Toys & Games</option>
                                <option value="automotive">Automotive</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    
                    <div>
                        <label for="tags" class="block text-sm font-medium text-gray-700 mb-2">
                            Tags <span class="text-gray-400">(Optional)</span>
                        </label>
                        <input 
                            type="text" 
                            id="tags" 
                            name="tags" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                            placeholder="Enter tags separated by commas (e.g., wireless, bluetooth, premium)"
                        >
                        <p class="text-xs text-gray-500 mt-1">Add relevant tags to help customers find your product</p>
                    </div>

                    
                    <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-100">
                        <button 
                            type="submit"
                            class="flex-1 bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 hover:shadow-lg flex items-center justify-center space-x-2"
                        >
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"/>
                            </svg>
                            <span>Add Product</span>
                        </button>
                        
                        <button 
                            type="button"
                            onclick="window.history.back()"
                            class="flex-1 sm:flex-none border border-gray-300 text-gray-700 px-6 py-3 rounded-xl font-medium hover:bg-gray-50 transition-colors"
                        >
                            Cancel
                        </button>
                    </div>
                </form>
            </div>

            
        </div>
    </div>
</x-app-layout>