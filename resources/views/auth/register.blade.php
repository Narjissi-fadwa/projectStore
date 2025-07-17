<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8 border border-pink-100">
            <h2 class="text-2xl font-bold text-center text-pink-600 mb-6">Create Your Account</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Name')" class="text-pink-600" />
                    <x-text-input id="name" class="mt-1 block w-full rounded-md border-pink-200 focus:ring-pink-500 focus:border-pink-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-1 text-sm text-red-500" />
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="text-pink-600" />
                    <x-text-input id="email" class="mt-1 block w-full rounded-md border-pink-200 focus:ring-pink-500 focus:border-pink-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-500" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-pink-600" />
                    <x-text-input id="password" class="mt-1 block w-full rounded-md border-pink-200 focus:ring-pink-500 focus:border-pink-500" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-500" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-pink-600" />
                    <x-text-input id="password_confirmation" class="mt-1 block w-full rounded-md border-pink-200 focus:ring-pink-500 focus:border-pink-500" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-sm text-red-500" />
                </div>

                <div class="flex items-center justify-between">
                    <a class="text-sm text-pink-500 hover:underline" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-md">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

