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

<body class=""style="background:rgba(45,37,26,1) ;">
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #96926b;">
        <div class="container-fluid float-right">
            <a class="text-white navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="text-white nav-link {{ $home ?? '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link {{ $about ?? '' }}" href="/about_us">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link {{ $contact ?? '' }}" href="/contact_us">contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link {{ $product ?? '' }}" href="/product">product</a>
                    </li>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('layout_content')
        @yield('gbr')
    </div>

</body>

</html>
