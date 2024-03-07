<x-web-layout> 

    <div class="container-fluid logInPage">
        <div class="parent" id="parent1LogIn">
            <div class="child" id="child1LogIn">
                <h1 style="font-weight: 500; letter-spacing: 3px; font-size: 50px;">
                    OmniView
                </h1>

                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div class="input-box">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- First Line Break (Space) -->
                    <div class="response">
                        <p id="userRespo"><br/></p>
                    </div>

                    <!-- Password -->
                    <div class="input-box">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Second Line Break (Space) -->
                    <div class="response">
                        <p id="passRespo"><br/></p>
                    </div>

                    <!-- Confirm Password -->
                    <div class="input-box">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Third Line Break (Space) -->
                    <div class="response">
                        <p id="passRespo"><br/></p>
                    </div>

                    <div class="ms-3">
                        <x-primary-button id="logInPage">
                            {{ __('Reset Password') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-web-layout>