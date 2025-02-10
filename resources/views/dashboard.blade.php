<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(Auth::user()->role === 'Gebruiker')
                <!-- Admin Dashboard -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-xl">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Analytics</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                            View your site's traffic and performance metrics.
                        </p>
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 font-medium mt-3 block">View Reports →</a>
                    </div>

                    <!-- Card 2 -->
                    <div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-xl">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Manage Users</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                            Add, edit, and remove users in your organization.
                        </p>
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 font-medium mt-3 block">Go to Users →</a>
                    </div>

                    <!-- Card 3 -->
                    <div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-xl">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Settings</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                            Customize application settings and preferences.
                        </p>
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 font-medium mt-3 block">Update Settings →</a>
                    </div>
                </div>

            @else
                <!-- Non-Admin View -->
                <div class="flex flex-col items-center justify-center p-8 bg-white dark:bg-gray-800 shadow-lg rounded-xl text-center">
                    <img src="{{ asset('illustration/team_illu.svg') }}" alt="Team Illustration" class="w-1/2 md:w-1/3 h-auto">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mt-6">
                        {{ __('You need to be added to an organization.') }}
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">
                        {{ __('Please contact a manager to get access.') }}
                    </p>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
