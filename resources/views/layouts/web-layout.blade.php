<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{ asset('/assets/CSS/navBar.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/CSS/style.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/CSS/footer.css') }}" rel="stylesheet">

        <title>{{ $title ?? 'OmniView' }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Overpass+Mono:wght@700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" rel="stylesheet">

        <!-- Version 4.0 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Overpass+Mono:wght@700&family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    </head>

    <body>

        <x-parts.navbar />

        <div>
            {{ $slot }}
        </div>

        <!-- Version 4.0 -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="{{ asset('/assets/JavaScript/logIn.js') }}"></script>

        {{ $scripts ?? '' }}

        <script>
            $(document).ready(function() {
                $('#login').click(function() {
                    window.location.href = "{{ route('login') }}";
                });
            });

            $(document).ready(function() {
                $('#register').click(function() {
                    window.location.href = "{{ route('register') }}";
                });
            });

            $(document).ready(function() {
                $('#schedule').click(function() {
                    window.location.href = "{{ route('register') }}";
                });
            });

            $(document).ready(function() {
                $('#joinUs').click(function() {
                    window.location.href = "{{ route('register') }}";
                });
            });
        </script>

        <x-parts.footer />

    </body>
</html>