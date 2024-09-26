<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center p-4 transition-colors duration-200"
    x-data="{ darkMode: false }" :class="{ 'dark bg-gray-900': darkMode }">
    <div
        class="bg-white dark:bg-gray-800 rounded-lg shadow-xl p-8 w-full max-w-4xl flex flex-col md:flex-row transition-colors duration-200">
        <div class="md:w-1/2 mb-8 md:mb-0 md:mr-8 flex items-center justify-center">
            <svg class="w-full h-auto max-w-sm" viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M287.163 62.5C252.163 37.5 209.163 25 164.163 25C74.1629 25 1.16293 98 1.16293 188C1.16293 278 74.1629 351 164.163 351C254.163 351 327.163 278 327.163 188"
                    :stroke="darkMode ? '#4B5563' : '#3B82F6'" stroke-width="8" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M327.163 62V188" :stroke="darkMode ? '#4B5563' : '#3B82F6'" stroke-width="8"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M264.163 125H364.163" :stroke="darkMode ? '#4B5563' : '#3B82F6'" stroke-width="8"
                    stroke-linecap="round" stroke-linejoin="round" />
                <circle cx="164.163" cy="188" r="75" :stroke="darkMode ? '#9CA3AF' : '#60A5FA'"
                    stroke-width="8" />
                <path d="M164.163 163V213" :stroke="darkMode ? '#9CA3AF' : '#60A5FA'" stroke-width="8"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M189.163 188H139.163" :stroke="darkMode ? '#9CA3AF' : '#60A5FA'" stroke-width="8"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <div class="md:w-1/2">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Contact Us</h2>
                <button @click="darkMode = !darkMode" class="rounded-full p-2 bg-gray-200 dark:bg-gray-700"
                    aria-label="Toggle dark mode">
                    <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                    <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </button>
            </div>
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name" required
                        class="mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                </div>
                <div>
                    <label for="email" class="text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input type="email" id="email" name="email" placeholder="your@email.com" required
                        class="mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                </div>
                <div>
                    <label for="subject" class="text-sm font-medium text-gray-700 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject" required
                        class="mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                </div>
                <div>
                    <label for="message" class="text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                    <textarea id="message" name="message" placeholder="Your message" required rows="4"
                        class="mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-lg">
                    Send Message
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>
