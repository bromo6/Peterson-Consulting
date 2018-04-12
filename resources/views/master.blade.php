<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand navBack">
        <a class="navbar-brand" href="/home">
            <img src="img/Peterson-Logo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link navText" href="/about">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link navText" href="/contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid px-0">
        @yield('content')
    </div>
    <footer>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-2">
                    <div class="row">
                        <div class="col">
                            <a class="footText" href="/home">Home</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="footText" href="/about">About Us</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="footText" href="/contact">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-8 offset-5">
                    <p id="copy">&#169; Peterson Consulting Group</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/owl.js"></script>
    @yield('bottomjs')
</body>

</html>
