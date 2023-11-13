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

<body class=""style="background:{{ $bg_color }} ;">
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
                        <a class="text-black nav-link {{ $contact ?? '' }}" href="/Contact-Us">Contact Us</a>
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


    <div class="container-fluid">
        @yield('layout_content1')
        @yield('layout_content2')
    </div>

    <div class=" overflow-hidden">
        @yield('gbr')
    </div>

    <footer class="bg-dark text-white p-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>At Virgo Furnishers, we are proud to boast a diverse team of experts, each with a wealth of experience in the intricate art of furniture craftsmanship. Our commitment to quality and customer satisfaction is reflected in the knowledge and dedication our experts bring to every project. </p>
                </div>
                <div class="col-md-4">
                    <h5>Contact Information</h5>
                    <p>Email: main_branch@example.com</p>
                    <p>Phone: 333-444-5555</p>
                    <p>Address: Main Street, City A</p>
                    <div >
                        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Contact us
                        </button>
                    </div>
                    <div class="modal fade text-black" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Contact us</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="Contactusnama" class="form-label">Name :</label>
                                            <input type="text" class="form-control" id="Contactusnama" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ContactusEmail" class="form-label">Email Address :</label>
                                            <input type="email" class="form-control" id="ContactusEmail" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ContactusPerusahaan" class="form-label">Corporate :</label>
                                            <input type="text" class="form-control" id="ContactusPerusahaan"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ContactusPassword" class="form-label">Password :</label>
                                            <input type="password" class="form-control" id="ContactusPassword">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ContactusPesan" class="form-label">Message   :</label>
                                            <input type="text" class="form-control form-control-lg" id="ContactusPesan">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <p>Stay connected on social media:</p>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="text-white">Facebook</a></li>
                        <li class="list-inline-item"><a href="#" class="text-white">Twitter</a></li>
                        <li class="list-inline-item"><a href="#" class="text-white">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div>
                <table class=mx-auto>
                    <tr>
                        <td><a>Quick Links</a></td>
                        <td><a href="/">| home</a></td>
                        <td><a href="/About-Us">| about us</a></td>
                        <td><a href="/contact-Us">| contact us</a></td>
                        <td><a href="/furnitures">| furnitures</a></td>
                    </tr>
                </table>
                <p class=text-center>
                    &copy; 2023 Your Website Name. All rights reserved. | <a href="/privacy" style="color: #888;">Privacy Policy</a> | <a href="/terms" style="color: #888;">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>


</body>

</html>
