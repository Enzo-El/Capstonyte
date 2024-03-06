<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
        <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <style>
            * {
                font-family: sans-serif;
                color: black;
            }

            /*-- Footer --*/
            Footer {
                background-color: #192d3a;
            }

            #footerContainer {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                grid-template-areas: "item1 item2 item3 item4";
                height: auto;
                padding-top: 30px;
                padding-bottom: 30px;
            }

            #footerContainer h4 {
                letter-spacing: 2px;
                margin-bottom: 10px;
                font-size: 19px;
                font-weight: 600;
            }

            #footerContainer a {
                text-decoration: none;
                color: rgba(255, 255, 255, 0.603);
                transition: 0.4s;
            }

            #footerContainer a:hover {
                padding-left: 10px;
                color: rgb(255, 255, 255);
            }

            i {
                color: white;
                font-size: 25px;
                letter-spacing: 20px;
            }

            .fParent p {
                margin-bottom: 8px;
                color: rgba(255, 255, 255, 0.603);
                font-size: 17px;
            }

            #fParent1 {
                grid-area: item1;
            }

            #fParent2 {
                grid-area: item2;
            }

            #fParent3 {
                grid-area: item3;
            }

            #fParent4 {
                grid-area: item4;
            }
            /*-- Footer --*/


            /*-- Media Queries --*/
            @media (max-width: 767px) {
                #footerContainer {
                    grid-template-columns: 2fr 2fr;
                    grid-template-areas: "item1 item2" "item3 item4";
                    gap: 25px;
                }
            }

            @media (max-width: 375px) {
                #footerContainer {
                    grid-template-columns: 2fr;
                    grid-template-areas: "item1" "item2" "item3" "item4";
                    gap: 30px;
                    padding: 30px;
                }
            }
            /*-- Media Queries --*/
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow" style="background-image: url('{{ asset('/assets/Images/background.png') }}');">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <x-parts.footer />

    </body>
</html>
