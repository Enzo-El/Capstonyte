<!-- Navigation Bar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="container">
        <a href="{{ route('index') }}" class="navbar-brand">
            <img src="{{ asset('/assets/Images/Logo.png') }}" style="height: 6vh; border-radius: 50%;" alt="OmniView" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navItems">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" style="justify-content: left" id="navItems">
            <ul class="navbar-nav" id="navElement1">
                <li class="navbar-item">
                    <a href="{{ route('index') }}" class="nav-link">
                        Home
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="{{ route('services') }}" class="nav-link">
                        Services
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="{{ route('about') }}" class="nav-link">
                        About Us
                    </a>
                </li>
            </ul>
        </div>

        @if (Route::has('login'))
        <div class="collapse navbar-collapse" style="justify-content: right; margin-right: 2%">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
            <ul class="navbar-nav" id="navElement2">
                <li class="navbar-item">
                    <button class="btn btn-sm" id="login">
                        Log In
                    </button>
                </li>

                @if (Route::has('register'))
                <li class="navbar-item">
                    <button class="btn btn-sm" id="register">
                        Register
                    </button>
                </li>
                @endif
            </ul>
            @endauth
        </div>
        @endif
    </div>
</div>
<!-- End of Navigation Bar -->