<nav class="bg-white dark:bg-gray-800 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <!-- Left Logo / Brand -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class="text-xl font-bold text-gray-900 dark:text-gray-100">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <!-- Right Side: Profile Dropdown -->
            <div class="relative">
                @auth
                    <button id="profileMenuButton" class="flex items-center text-sm focus:outline-none">
                        <img class="w-10 h-10 rounded-full border-2 border-gray-300 dark:border-gray-600"
                             src="{{ Auth::user()->profile_image ?? asset('/illustration/male_illu.svg') }}"
                             alt="User Avatar">
                        <span class="ml-2 text-gray-900 dark:text-gray-100 font-medium">
                            {{ Auth::user()->name }}
                        </span>
                        <svg class="w-4 h-4 ml-1 text-gray-600 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-gray-700 shadow-lg rounded-lg z-50">
{{--                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">--}}
{{--                            Profile--}}
{{--                        </a>--}}
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                            Settings
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-gray-900 dark:text-gray-100 hover:text-indigo-600 dark:hover:text-indigo-400">
                        Login
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<!-- Dropdown Toggle Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const profileMenuButton = document.getElementById("profileMenuButton");
        const profileDropdown = document.getElementById("profileDropdown");

        profileMenuButton.addEventListener("click", function() {
            profileDropdown.classList.toggle("hidden");
        });

        document.addEventListener("click", function(event) {
            if (!profileMenuButton.contains(event.target) && !profileDropdown.contains(event.target)) {
                profileDropdown.classList.add("hidden");
            }
        });
    });
</script>
