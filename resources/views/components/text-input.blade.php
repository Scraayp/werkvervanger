@props(['disabled' => false])

<input
    @disabled($disabled)
    {{ $attributes->merge(['class' => '
        w-4/5 md:w-full px-4 py-3 border border-gray-300 dark:border-gray-600
        bg-white dark:bg-gray-900 dark:text-gray-300
        rounded-lg shadow-sm focus:outline-none
        focus:ring-2 focus:ring-indigo-500 dark:focus:ring-indigo-600
        focus:border-indigo-500 dark:focus:border-indigo-600
        transition duration-300 ease-in-out
    ']) }}
>
