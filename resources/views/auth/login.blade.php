<x-guest-layout>
    <div class="flex min-h-screen items-center justify-center bg-gray-100 dark:bg-gray-900 px-4">
        <div class="flex w-full max-w-5xl overflow-hidden rounded-2xl bg-white dark:bg-gray-800 shadow-xl shadow-gray-300 dark:shadow-gray-900 transition-all duration-300">

            <!-- Left Illustration -->
            <div class="hidden md:flex w-1/2 bg-gradient-to-br from-gray-200 to-gray-300 dark:from-gray-700 dark:to-gray-800 items-center justify-center p-10">
                <img src="{{ asset('illustration/hello_illu.svg') }}" alt="Illustration" class="w-3/4 h-auto animate-fade-in">
            </div>

            <!-- Right Login Form -->
            <div class="w-full md:w-1/2 p-12">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100 text-center">
                    {{ __('Welcome Back') }}
                </h2>
                <p class="text-center text-gray-600 dark:text-gray-400 mt-2">
                    {{ __('Sign in to your account') }}
                </p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4 mt-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="mt-6 space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email Address')" class="text-lg font-semibold"/>
                        <x-text-input id="email" class="block mt-1 w-full px-4 py-3 rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="text-lg font-semibold"/>
                        <x-text-input id="password" class="block mt-1 w-full px-4 py-3 rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 dark:border-gray-600 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline font-medium" href="{{ route('password.request') }}">
                                {{ __('Forgot Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="flex justify-center mt-6">
                        <x-primary-button class="w-full py-3 text-lg font-semibold rounded-lg transition-transform transform hover:scale-105">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-guest-layout>
