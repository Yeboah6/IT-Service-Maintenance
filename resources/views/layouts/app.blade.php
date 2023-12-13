<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Links -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen dark:bg-gray-900">
                @php
                    $hardwareUser = auth()->user()-> email == "hardwareadmin@gmail.com"; // detecting the user type
                    $softwareUser = auth()->user()-> email == "softwareadmin@gmail.com";
                    $networkUser = auth()->user()-> email == "networkadmin@gmail.com";
                @endphp
                @include('layouts.navigation')
                @if($hardwareUser)
                    @include('Dashboards.Admin.sideNav')
                @elseif ($softwareUser)
                    @include('Dashboards.Admin.sideNav')
                @elseif ($networkUser)
                    @include('Dashboards.Admin.sideNav')
                @else
                
                    @include('Dashboards.User.sideNav')
                @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
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
        <script src="js/script.js"></script>
    </body>
</html>
