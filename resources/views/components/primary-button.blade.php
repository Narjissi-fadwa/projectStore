<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 border border-transparent rounded-xl font-semibold text-sm text-white uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition-all duration-300 hover:shadow-lg']) }}>
    {{ $slot }}
</button>

