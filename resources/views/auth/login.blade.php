<x-web-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
        <div class="container-fluid logInPage">
            <div class="parent" id="parent1LogIn">
                <div class="child" id="child1LogIn">
                    <h1 style="font-weight: 500; letter-spacing: 3px; font-size: 50px;">
                        OmniView
                    </h1>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="input-box">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> <!-- class="block mt-1 w-full" -->
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- First Line Break (Space) -->
                        <div class="response">
                            <p id="userRespo"><br/></p>
                        </div>

                        <!-- Password -->
                        <div class="input-box"> <!-- class="mt-4" -->
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" type="password" name="password" style="border-style: none" required autocomplete="current-password" /> <!-- class="block mt-1 w-full" -->
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Second Line Break (Space) -->
                        <div class="response">
                            <p id="passRespo"><br/></p>
                        </div>

                        <!-- Remember Me -->
                        <div> <!-- class="block mt-4" -->
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <!-- Third Line Break (Space) -->
                        <div class="response">
                            <p id="passRespo"></p>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <!-- Fourth Line Break (Space) -->
                            <div class="response">
                                <p id="passRespo"><br/></p>
                            </div>

                            <x-primary-button class="ms-3" id="logInPage">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <p style="font-size: 17px; text-align: center">
                                Not yet register? <a href="{{ route('register') }}">Register</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</x-web-layout>