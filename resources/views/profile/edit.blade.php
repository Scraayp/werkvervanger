<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 dark:text-gray-100">
            {{ __('Profile Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col md:flex-row gap-8">

            <!-- Left Illustration -->
            <div class="hidden md:flex w-1/3 bg-gradient-to-br from-gray-200 to-gray-300 dark:from-gray-700 dark:to-gray-800 items-center justify-center p-8 rounded-2xl shadow-lg">
                <img src="{{ asset('illustration/profile_illu.svg') }}" alt="Profile Illustration" class="w-3/4 h-auto animate-fade-in">
            </div>

            <!-- Right Profile & Settings -->
            <div class="w-full md:w-2/3 space-y-6">

                <!-- Profile Card -->
                <div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-2xl flex flex-col items-center text-center">
                    <img class="w-24 h-24 rounded-full border-4 border-gray-300 dark:border-gray-600"
                         src="{{ Auth::user()->profile_image ?? asset('/illustration/male_illu.svg') }}"
                         alt="Profile Picture">
                    <h3 class="text-xl font-semibold mt-4 text-gray-900 dark:text-gray-100">
                        {{ Auth::user()->name }}
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ Auth::user()->email }}</p>
                </div>

                <!-- Profile Information -->
                <div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-2xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Profile Information') }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">{{ __("Update your account's profile information and email address.") }}</p>

                    <form method="post" action="{{ route('profile.update') }}" class="mt-4 space-y-4">
                        @csrf
                        @method('patch')

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="block mt-1 w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="block mt-1 w-full" :value="old('email', $user->email)" required autocomplete="username" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <div class="flex justify-end">
                            <x-primary-button>{{ __('Save Changes') }}</x-primary-button>
                        </div>
                    </form>
                </div>

                <!-- Update Password -->
                <div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-2xl">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Update Password') }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">{{ __('Ensure your account is using a strong, random password.') }}</p>

                    <form method="post" action="{{ route('password.update') }}" class="mt-4 space-y-4">
                        @csrf
                        @method('put')

                        <div>
                            <x-input-label for="current_password" :value="__('Current Password')" />
                            <x-text-input id="current_password" name="current_password" type="password" class="block mt-1 w-full" autocomplete="current-password" />
                            <x-input-error class="mt-2" :messages="$errors->updatePassword->get('current_password')" />
                        </div>

                        <div>
                            <x-input-label for="password" :value="__('New Password')" />
                            <x-text-input id="password" name="password" type="password" class="block mt-1 w-full" autocomplete="new-password" />
                            <x-input-error class="mt-2" :messages="$errors->updatePassword->get('password')" />
                        </div>

                        <div>
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="block mt-1 w-full" autocomplete="new-password" />
                            <x-input-error class="mt-2" :messages="$errors->updatePassword->get('password_confirmation')" />
                        </div>

                        <div class="flex justify-end">
                            <x-primary-button>{{ __('Update Password') }}</x-primary-button>
                        </div>
                    </form>
                </div>

                <!-- Delete Account -->
                <div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-2xl">
                    <h3 class="text-lg font-medium text-red-600 dark:text-red-400">{{ __('Delete Account') }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        {{ __('Once your account is deleted, all data will be permanently removed. This action cannot be undone.') }}
                    </p>

                    <x-danger-button class="mt-4"
                                     x-data=""
                                     x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
                        {{ __('Delete Account') }}
                    </x-danger-button>

                    <!-- Modal Confirmation -->
                    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                            @csrf
                            @method('delete')

                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Are you sure you want to delete your account?') }}
                            </h2>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('This action is permanent. Please enter your password to confirm.') }}
                            </p>

                            <div class="mt-4">
                                <x-input-label for="password" value="{{ __('Password') }}" />
                                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" placeholder="{{ __('Password') }}" />
                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">{{ __('Cancel') }}</x-secondary-button>
                                <x-danger-button class="ml-3">{{ __('Delete Account') }}</x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
