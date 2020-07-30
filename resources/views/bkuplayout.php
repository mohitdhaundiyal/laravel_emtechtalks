<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emtechtalks</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="48x48" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <link href="animate/animate.css" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                placement: 'top',
                trigger: 'hover'
            });
        });
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Header */
        .nav-item {
            font-size: 1.2rem;
        }

        .navbar-nav .nav-link:hover {
            color: #ef1b48 !important;
        }

        /* Footer */
        #footer {
            position: relative;
            bottom: 0;
            left: 0;
            background: #000;
            text-align: center;
            width: 100%;
            padding: 50px;
        }

        #footer .fa {
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
        }

        #footer .fa:hover {
            color: #FFF;
        }

        .fa {
            padding: 15px;
        }

        #footer .copyright {
            color: #bbb;
            font-size: 1rem;
            text-align: center;
        }

        .credits {
            font-size: 15px;
            color: #18d26e;
        }

        .credits a {
            color: #ffff;
            transition: 0.3s;
        }

        .credits a:hover {
            color: #18d26e;
        }

        @media only screen and (max-width: 700px) {
            .nav-item {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    @yield('header')
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-lg">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="search">Search</a>
                    <a class="nav-item nav-link active" href="covid-19">Covid-19</a>
                    <a class="nav-item nav-link active" href="about">About</a>
                </ul>
            </div>
        </div>
    </nav>
    @show

    @yield('content')

    @yield('footer')
    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <a href="https://www.instagram.com/emtechtalks/" target="_blank" class="fa fa-instagram fa-2x" data-container="body" data-toggle="popover" data-placement="top" data-content="Instagram"></a>
            <a href="https://twitter.com/emtechtalks?s=09" target="_blank" class="fa fa-twitter fa-2x" data-container="body" data-toggle="popover" data-placement="top" data-content="Twitter"></a>
            <a href="https://www.facebook.com/emtechtalks" target="_blank" class="fa fa-facebook fa-2x" data-container="body" data-toggle="popover" data-placement="top" data-content="Facebook"></a>
        </div>
        <div class="copyright">
            &copy; emtechtalks. All rights reserved.
        </div>
        <div class="credits">
            Designed by <a href="https://www.instagram.com/_dhaundiyal_mohit/" target="_blank">mohit_dhaundiyal</a>
        </div>
    </footer>

    @show
</body>

</html>