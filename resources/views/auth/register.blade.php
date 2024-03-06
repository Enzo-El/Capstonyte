<x-web-layout>

    <div class="container-fluid logInPage">
        <div class="parent" id="parent1LogIn">
            <div class="child" id="child1LogIn">
                <h1 style="font-weight: 500; letter-spacing: 3px; font-size: 50px;">
                    OmniView
                </h1>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="input-box">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- First Line Break (Space) -->
                    <div class="response">
                        <p id="userRespo"><br/></p>
                    </div>

                    <!-- Email Address -->
                    <div class="input-box">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Second Line Break (Space) -->
                    <div class="response">
                        <p id="passRespo"><br/></p>
                    </div>

                    <!-- Password -->
                    <div class="input-box">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Third Line Break (Space) -->
                    <div class="response">
                        <p id="passRespo"><br/></p>
                    </div>

                    <!-- Confirm Password -->
                    <div class="input-box">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Fourth Line Break (Space) -->
                    <div class="response">
                        <p id="passRespo"><br/></p>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                    <x-primary-button class="ms-4" id="logInPage">
                        {{ __('Register') }}
                    </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-web-layout>