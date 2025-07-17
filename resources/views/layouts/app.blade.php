<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ShopEase') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|poppins:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-inter antialiased bg-gradient-to-br from-rose-50 via-pink-50 to-orange-50 min-h-screen">
        <!-- Navigation -->
        <nav class="bg-white/80 backdrop-blur-md border-b border-pink-100 sticky top-0 z-50 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <!-- Logo -->
                        <a href="{{ route('dashboard') }}" class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-pink-500 to-rose-500 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                                </svg>
                            </div>
                            <span class="text-xl font-bold bg-gradient-to-r from-pink-600 to-rose-600 bg-clip-text text-transparent">ShopEase</span>
                        </a>

                        <!-- Navigation Links -->
                        <div class="hidden md:flex items-center space-x-8 ml-10">
                            <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                            <a href="{{ route('customer.products') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Products</a>
                            
                            @if(auth()->user()->role === 'customer')
                                <a href="#" class="text-gray-700 hover:text-pink-600 px-3 py-2 rounded-md text-sm font-medium transition-colors flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3z"/>
                                    </svg>
                                    Cart (3)
                                </a>
                            @endif

                            @if(auth()->user()->role === 'seller')
                                <a href="{{ route('seller.add-product') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Add Product</a>
                            @endif

                            @if(auth()->user()->role === 'admin')
                                <a href="{{ route('admin.dashboard') }}" class="text-gray-700 hover:text-pink-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">User Management</a>
                            @endif
                        </div>
                    </div>

                    <!-- User Menu -->
                    <div class="flex items-center space-x-4">
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center space-x-2 text-gray-700 hover:text-pink-600 transition-colors">
                                <div class="w-8 h-8 bg-gradient-to-r from-pink-400 to-rose-400 rounded-full flex items-center justify-center">
                                    <span class="text-sm font-medium text-white">{{ substr(auth()->user()->name, 0, 1) }}</span>
                                </div>
                                <span class="hidden md:block text-sm font-medium">{{ auth()->user()->name }}</span>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </button>

                            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-100 py-1">
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-50 hover:text-pink-600">Profile</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-pink-50 hover:text-pink-600">Logout</button>
                                </form>
                            </div>
                        </div>

                        <!-- Mobile menu button -->
                        <button class="md:hidden p-2 rounded-md text-gray-700 hover:text-pink-600 hover:bg-pink-50">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Success Messages -->
        @if(session('success'))
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
                <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <!-- Page Content -->
        <main class="pb-16">
            {{ $slot }}
        </main>
    </body>
</html>



