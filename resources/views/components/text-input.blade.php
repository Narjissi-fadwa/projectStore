@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-white border-gray-300 focus:border-pink-500 dark:focus:border-pink-500 focus:ring-pink-500 dark:focus:ring-pink-500 rounded-md shadow-sm']) }}>

