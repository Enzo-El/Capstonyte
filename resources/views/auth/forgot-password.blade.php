<x-web-layout>

    <div class="container-fluid logInPage">
        <div class="parent" id="parent1LogIn">
            <div class="child" id="child1LogIn">
                <h1 style="font-weight: 500; letter-spacing: 3px; font-size: 50px;">
                    OmniView
                </h1>

                <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Forgot your password?') }}
                    {{ __('No problem. Just let us know your email address') }}
                    {{ __('and we will email you a password reset link') }}
                    {{ __('that will allow you to choose a new one.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="input-box">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- First Line Break (Space) -->
                    <div class="response">
                        <p id="userRespo"><br/></p>
                    </div>

                    <div class="ms-3">
                        <x-primary-button class="ms-3" id="logInPage">
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-web-layout>
