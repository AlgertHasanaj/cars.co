<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid ">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbarback">
            <div class="container-fluid">
                <a class="navbar-brand navtext" href="{{ url('/') }}">Cars</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa-solid fa-grip-lines"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item px-lg-3 ">
                            <a class="nav-link  navtext active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item px-lg-3 ">
                            <a class="nav-link navtext" href="{{ url('/contact') }}">Contact</a>
                        </li>
                        <li class="nav-item px-lg-3 ">
                            <a class="nav-link navtext" href="{{ url('/whyUs') }}">About Us</a>
                        </li>
                        <li class="nav-item px-lg-3  dropdown">
                            <a class="nav-link navtext dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Models
                            </a>
                            <ul class="dropdown-menu drpi">
                                <li><a class="dropdown-item drpi" href="#">Suv</a></li>
                                <li><a class="dropdown-item drpi" href="#">Sedan</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn " type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!-- fund navbar -->
    <!-- why us -->
    <!-- <div class="container-fluid mx-auto my-5">
        <div class="card text-bg-dark">
            <img src="{{ asset('images/bmwR.jpg') }}" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title"><a href="">Why us?</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam culpa labore atque enim, impedit totam molestiae nesciunt voluptatum nihil expedita, maiores, nulla itaque cumque consequatur? Quo itaque cupiditate corrupti voluptatum.</p>
                <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div> -->
    <!-- fund why us -->
    <div id="contact" class="container-fluid mt-5">
        <h1 class="text-center my-5">Contact Us</h1>

        @if (session('success'))
        <div>{{ session('success') }}</div>
        @endif

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="/contact" method="POST">
            @csrf
            <div class="row ">
                <div class="form-group col-md-6 ">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control formstyle" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="surname">Surname:</label>
                    <input type="text" class="form-control formstyle" id="surname" name="surname" value="{{ old('surname') }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 ">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control formstyle" id="email" name="email" value="{{ old('email') }}">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="message">Message:</label>
                    <textarea class="form-control formstyle" id="message" name="message" rows="1">{{ old('message') }}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary buton">Send</button>
        </form>
    </div>

    <!-- footer -->
    <footer class="container-fluid mt-auto ">
        <div class="container">
            <div class="row py-5">
                <div class="col-sm-12 col-md-4">
                    <!-- logo -->
                    <p></p>
                    <!-- logo -->
                    <p class="info_cars">Eja zgjidh modelin tend te preferuar</p>
                    <p>Best cars shop in Albania</p>
                </div>
                <div class="col-sm-12 col-md-2 ">
                    <h3>Kompania</h3>
                    <p><a href="about.html">Rreth Nesh</a></p>
                    <p><a href="prova.html">Prova</a></p>
                    <p><a href="sherbime.html">Shërbimet</a></p>
                    <p><a href="inspect.html"> Inspektime</a></p>
                </div>
                <div class="col-sm-12 col-md-3">
                    <h3>Informacion</h3>
                    <p><a href="kontakt.html">Kontakto</a></p>
                    <p><i class="fas fa-phone"></i><a href="tel:0693016306">+355 693016306</a></p>
                    <p><a href="mail:info@cars.co">info@cars.co</a></p>
                    <p>Tiranë</p>
                </div>
                <div class="col-sm-12 col-md-3 pt-5">
                    <p>Subscribe</p>
                    <div id="emaili">
                        <input type="email" class="input" placeholder="Email...">
                        <button type="button" class="btn subcribe">Send</button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row pb-2">
                    <div class="bot col-sm-12 col-md-4">
                        <p>&copy; 2024 CARS. All rights reserved.</p>
                    </div>
                    <div class="bot col-sm-12 col-md-4">
                        <p><a href="privatesia.html" target="_blank">Politikat e Privatësisë</a></p>
                    </div>
                    <div class="social col-sm-12 col-md-4">
                        <a href="www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
                        <a href=" www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href=" www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                        <a href="www.youtube.com"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
    </footer>
    <!-- fund footer -->

    <!-- javascript -->

    <script src="{{ asset('js/javaScript.JS') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- end javascript -->

</body>

</html>