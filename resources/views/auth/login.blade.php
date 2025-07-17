<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg border border-pink-100 p-8">
            <h2 class="text-2xl font-bold text-center text-pink-600 mb-6">Welcome Back</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-sm text-green-600 text-center" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="text-pink-600" />
                    <x-text-input id="email" class="mt-1 block w-full rounded-md border-pink-200 focus:ring-pink-500 focus:border-pink-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-500" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-pink-600" />
                    <x-text-input id="password" class="mt-1 block w-full rounded-md border-pink-200 focus:ring-pink-500 focus:border-pink-500" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-500" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-6">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-pink-500 shadow-sm focus:ring-pink-500" name="remember">
                    <label for="remember_me" class="ms-2 text-sm text-gray-700"> {{ __('Remember me') }} </label>
                </div>

                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-pink-500 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-md">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
 
