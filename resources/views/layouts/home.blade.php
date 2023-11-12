<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pagetitle }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="overflow-hidden"style="background:{{ $bg_color }} ;">
    <nav class="navbar navbar-expand-lg sticky-top"
        style="background-color: #96926b;box-shadow: 0 0 1px 1px rgb(55, 55, 55) inset;">
        <div class="container-fluid float-right">
            <a class="text-white navbar-brand sticky-top" href="#">| V.F |</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item nav-tabs">
                        <a class="text-black nav-link {{ $home ?? '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item nav-tabs">
                        <a class="text-black nav-link {{ $about ?? '' }}" href="/About-Us">About Us</a>
                    </li>
                    <li class="nav-item nav-tabs">
                        <a class="text-black nav-link {{ $contact ?? '' }}" href="/Contact-Us">Contact Uus</a>
                    </li>
                    {{-- <li class="nav-item nav-tabs">
                        <a class="text-black nav-link {{ $employee ?? '' }}" href="/employee">employee</a>
                    </li> --}}
                    <li class="nav-item nav-tabs">
                        <a class="text-black nav-link {{ $product ?? '' }}" href="/Furnitures">Furnitures</a>
                    </li>
            </div>

            <div>
                <a class="text-white navbar-brand sticky-top" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        </div>
    </nav>

    <script>
        // JavaScript to toggle the navbar visibility using an icon button
        document.getElementById('navbarToggleIcon').addEventListener('click', function() {
            var navbar = document.getElementById('navbarNav');
            if (navbar.classList.contains('show')) {
                navbar.classList.remove('show');
            } else {
                navbar.classList.add('show');
            }
        });
    </script>

    <div class="container-fluid">
        @yield('layout_content1')
        @yield('layout_content2')
    </div>

    <div class=" overflow-hidden">
        @yield('gbr')
    </div>

    <footer class="mt-5 text-center text-light">
        <p>&copy; 2023 Your Website Name. All rights reserved. | <a href="/privacy" style="color: #888;">Privacy Policy</a> | <a href="/terms" style="color: #888;">Terms of Service</a></p>
    </footer>

</body>

</html>
