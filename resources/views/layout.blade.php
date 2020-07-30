<!DOCTYPE HTML>
<html>

<head>
    <title>emtechtalks</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="48x48" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <link href="animate/animate.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<style>
    body,
    input,
    select,
    textarea {
        font-family: "Raleway", Arial, Helvetica, sans-serif;
        font-weight: 400;
        font-size: 1rem;
        line-height: 1.65;
    }

    .post-box {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .element {
        display: inline-block;
    }

    .post-box:hover img {
        -webkit-transform: scale(1.5);
        transform: scale(1.3);
    }

    .post-img {
        overflow: hidden;
    }

    .post-img img {
        transition: all 0.6s;
    }

    .post-box a:hover {
        text-decoration: none;
        color: #ce1b28;
    }

    .wrapper button:hover {
        color: white !important;
        background-color: #111111;
        border-color: white !important;
    }

    @media screen and (max-width: 600px) {
        #get_in_touch {
            margin-top: 4rem;
            font-size: 1rem;
        }
    }
</style>

<body class="is-preload">
    @yield('header')
    <!-- Header -->
    <header id="header">
        <a class="logo" href="/"><img class="navbar-brand" src="logo.png" height="30px" width="30px" style="margin-right:5px; margin-bottom:3.5px;">TechTalks</a>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Nav -->
    <nav id="menu">
        <ul class="links">
            <li><a href="/">Home</a></li>
            <li><a href="search">News</a></li>
            <li><a href="covid-19">Covid-19</a></li>
            <li><a href="https://www.instagram.com/emtechtalks/" target="_blank"><i class="icon fa-instagram">&nbsp;</i> Instagram</a></li>
            <li><a href="https://twitter.com/emtechtalks?s=09" target="_blank"><i class="icon fa-twitter">&nbsp;</i> Twitter</a></li>
            <li><a href="https://www.facebook.com/emtechtalks" target="_blank"><i class="icon fa-facebook">&nbsp;</i> Facebook</a></li>
            <li><a href="https://github.com/mohitdhaundiyal" target="_blank"><i class="icon fa-github">&nbsp;</i> Github</a></li>
        </ul>
    </nav>
    @show
    @yield('content')
    @yield('footer')
    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <div class="content">
                <section data-aos="zoom-in-up" data-aos-delay="200">
                    <h4>Other pages</h4>
                    <ul class="alt">
                        <li><a href="covid-19">Covid-19 Dashboard</a></li>
                        <li><a href="search">Trending News</a></li>
                    </ul>
                </section>
                <section data-aos="zoom-in-up" data-aos-delay="300">
                    <h4>Recent News</h4>
                    <ul class="alt">
                        @foreach($recents as $recent)
                        <li><a href="post-{{$recent->id}}">{{$recent->post_title}}</a></li>
                        @endforeach
                    </ul>
                </section>
                <section data-aos="zoom-in-up" data-aos-delay="400">
                    <h4>Follow Me</h4>
                    <ul class=" plain">
                        <li><a href="https://www.instagram.com/emtechtalks/" target="_blank"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
                        <li><a href="https://twitter.com/emtechtalks?s=09" target="_blank"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
                        <li><a href="https://www.facebook.com/emtechtalks" target="_blank"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
                        <li><a href="https://github.com/mohitdhaundiyal" target="_blank"><i class="icon fa-github">&nbsp;</i>Github</a></li>
                    </ul>
                </section>
            </div>
            <div>
                <div class="copyright" data-aos="flip-down" data-aos-delay="600" data-aos-anchor-placement="center-bottom">
                    &copy; emtechtalks | All rights reserved. | Designed by <a href="https://www.instagram.com/_dhaundiyal_mohit/" style="color:#18d26e;" target="_blank">mohit_dhaundiyal</a>
                </div>
            </div>
        </div>
    </footer>
    @show
</body>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<!-- TYPE ANIMATION -->
<script>
    var options = {
        strings: ['The Latest Tech News', 'The Latest Tech Updates', 'The Latest Tech Reviews', 'TECH FOR YOU...'],
        typeSpeed: 90,
        backSpeed: 60,
        smartBackspace: true,
        cursorChar: '|',
        autoInsertCss: true,
    };
    var typed = new Typed('.element', options);
</script>

<!-- SCROLL ANIMATION -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>