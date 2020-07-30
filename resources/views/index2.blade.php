@extends('layout')
@section('content')
<?php
// PHP program to convert timestamp 
function time_Ago($time)
{
    // Calculate difference between current 
    // time and given timestamp in seconds 
    $diff = time() - $time;

    // Time difference in seconds 
    $sec = $diff;

    // Convert time difference in minutes 
    $min = round($diff / 60);

    // Convert time difference in hours 
    $hrs = round($diff / 3600);

    // Convert time difference in days 
    $days = round($diff / 86400);

    // Convert time difference in weeks 
    $weeks = round($diff / 604800);

    // Convert time difference in months 
    $mnths = round($diff / 2600640);

    // Convert time difference in years 
    $yrs = round($diff / 31207680);

    // Check for seconds 
    if ($sec <= 60) {
        echo "$sec seconds ago";
    }

    // Check for minutes 
    else if ($min <= 60) {
        if ($min == 1) {
            echo "one minute ago";
        } else {
            echo "$min minutes ago";
        }
    }

    // Check for hours 
    else if ($hrs <= 24) {
        if ($hrs == 1) {
            echo "an hour ago";
        } else {
            echo "$hrs hours ago";
        }
    }

    // Check for days 
    else if ($days <= 7) {
        if ($days == 1) {
            echo "Yesterday";
        } else {
            echo "$days days ago";
        }
    }

    // Check for weeks 
    else if ($weeks <= 4.3) {
        if ($weeks == 1) {
            echo "a week ago";
        } else {
            echo "$weeks weeks ago";
        }
    }

    // Check for months 
    else if ($mnths <= 12) {
        if ($mnths == 1) {
            echo "a month ago";
        } else {
            echo "$mnths months ago";
        }
    }

    // Check for years 
    else {
        if ($yrs == 1) {
            echo "one year ago";
        } else {
            echo "$yrs years ago";
        }
    }
}
?>

<style>
    body {
        background-color: #050505;
        color: white;
        font-family: 'Roboto', sans-serif;
    }

    .top-img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 150px;
        width: 150px;
    }

    .heading1 {
        text-align: center;
        font-weight: 400;
        font-size: 40px;
        position: relative;
        padding-bottom: 10px;
        z-index: 1;
    }

    .heading2 {
        text-align: center;
        font-weight: 400;
        font-size: 22px;
        color: #fbce0c;
        padding: 8px;
        position: relative;
        border: 1px solid #fbce0c;
    }

    .title {
        border-bottom: 2px solid #18d26e;
        text-transform: uppercase;
        font-size: 38px;
        line-height: 50px;
        position: relative;
        margin-top: 10px;
    }

    .list-heading-link {
        font-size: 15px;
        text-align: left;
        position: absolute;
        top: 0;
        right: 0;
    }

    .title a {
        text-decoration: none;
        color: white;
    }

    .title a:hover {
        color: #ef1b48;
    }

    .title {
        font-size: 30px;
        margin-left: 30px;
        margin-right: 30px;
    }

    /*POST*/
    .post-box {
        background-color: #050505;
        margin-top: 2rem;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .post-box:hover img {
        -webkit-transform: scale(1.5);
        transform: scale(1.3);
    }

    .post-img {
        margin-top: 5px;
        overflow: hidden;
        text-align: center;
    }

    .post-img img {
        transition: all 1s;
    }

    .w-date {
        text-align: left;
        position: absolute;
        margin-top: 12px;
        right: 0;
        color: #fbce0c;
    }

    /*post content*/
    .post-content {
        padding: 20px;
    }

    .post-content h2 {
        font-size: 23px;
    }

    .post-content a {
        text-decoration: none;
        color: white;
    }

    .post-content a:hover {
        color: #ef1b48;
    }

    /*PAGINATION*/
    .page-link {
        background-color: black;
        color: white;
        padding: 1rem, 0.75rem;
    }

    .page {
        margin: 20px;
    }

    .pagination {
        font-size: 22px;
    }

    .element {
        display: inline-block;
    }

    /*CONTACT*/
    .contact_card {
        padding: 20px;
        background-color: #050505;
        margin-top: 40px;
        color: white;
        border-color: #fbce0c;
        border-radius: 10px;
    }

    .form-control {
        border-radius: 0;
    }

    .btn {
        border-radius: 0;
    }

    #get_in_touch {
        font-size: 20px;
    }

    .typed-cursor {
        color: white;
    }

    .badge {
        font-size: 12px;
        padding-right: 10px;
        padding-left: 10px;
        background: #ED213A;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #93291E, #ED213A);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #93291E, #ED213A);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .badge a:hover {
        color: white;
    }

    @media only screen and (max-width: 800px) {
        .post-box {
            margin-top: 0;
            background-color: #121212;
        }

        .top-img {
            height: 100px;
            width: 100px;
        }

        .heading1 {
            font-size: 30px;
        }

        .heading2 {
            font-size: 17px;
            padding: 7px;
        }

        .title {
            font-size: 21px;
            margin-left: 0;
            margin-right: 0;
            line-height: 2.5rem;
        }

        .w-date {
            margin-right: 40px;

        }

        .list-heading-link {
            font-size: 11px;
        }

        #get_in_touch {
            margin-top: 25px;
            font-size: 17px;
        }

        .post-content h2 {
            font-size: 20px;
        }

        .post-content {
            padding: 7px;
        }

        .contact_card {
            margin-top: 10px;
            background-color: #121212;
        }

        .badge {
            font-size: 9px;
        }
    }
</style>

<!-- TOP IMAGE SECTION -->
<div class="container">
    <img class="top-img" src=" HD1.png">
    <div class="heading1">emTechTalks</div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="heading2 animate__animated animate__heartBeat">
                <div class="element"></div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>

<!-- MAIN POST SECTION -->
<div class="container-fluid" style="max-width: 100rem;">
    <div class="title">
        The Latest <span class="badge"><a href="covid-19"> Covid-19 </a></span>
        <a class="list-heading-link" href="search">View more news<i class="fa fa-chevron-right"></i></a>
    </div>
    <div class="row" id="main_post">
        @if(count($posts)>0)
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="post-box animate__animated animate__zoomIn">
                <div class="post-img">
                    <a href="post-{{$post->id}}">
                        <img class="img-fluid card-image" src="https://emtechtalks.s3.us-east-2.amazonaws.com/cover_images/{{$post->cover_image}}" alt="no-image" style="height:280px;">
                    </a>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="post-content">
                            <a href="post-{{$post->id}}">
                                <h2 class="post-title">{{$post->post_title}}</h2>
                            </a>
                            <div class="post-more">
                                <span class="w-ctegory">
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    Tech News
                                </span>
                                <span class="w-date">
                                    <?php
                                    $curr_time = $post->created_at;
                                    $time_ago = strtotime($curr_time);
                                    echo time_Ago($time_ago);
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h3 style="padding:20px;">No Post Found.</h3>
        @endif
    </div>
    <div class="page">
        {{$posts->links()}}
    </div>
</div>

<!-- CONTACT SECTION -->
<div class="container">
    @if(Session::get('message'))
    <div id="msg" class="alert alert-success" role="alert">
        <b>{{Session('message')}}</b>
    </div>
    @endif
    <div class="card contact_card animate__animated animate__slideInDown" style="margin-bottom:20px; border-radius:0;">
        <div class="row">
            <div class="col-lg-7">
                <h4>Send Message</h4>
                <hr style="height:1px;background-color:#ef1b48;width:20%;text-align:left;margin-left:0">
                <form action="message" method="post">
                    @csrf
                    <input type="text" class="form-control" name="contact_name" placeholder="Your Name"><br>
                    <input type="email" class="form-control" name="contact_email" placeholder="Your Email"><br>
                    <textarea name="contact_message" class="form-control" placeholder="Message"></textarea><br>
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-lg-5" id="get_in_touch">
                <h4>Get in Touch</h4>
                <hr style="height:1px;background-color:#ef1b48;width:20%;text-align:left;margin-left:0">
                <i class="fa fa-terminal" style="color:#007bff;" aria-hidden="true"></i> Mohit Dhaundiyal.<br>
                <i class="fa fa-envelope" style="color:#007bff;" aria-hidden="true"></i> mohit.dhaundiyal22@gmail.com<br>
                <i class="fa fa-phone" style="color:#007bff;" aria-hidden="true"></i> 7011013842
            </div>
        </div>
    </div>
</div>
<!-- TYPE ANIMATION -->
<script>
    var options = {
        strings: ['Hi, Welcome to emTechTalks', 'The Latest Tech News', 'The Latest Tech Updates', 'The Latest Tech Reviews', 'Tech For You...'],
        typeSpeed: 80,
        backSpeed: 50,
        smartBackspace: true,
        cursorChar: '|',
        autoInsertCss: true,
    };
    var typed = new Typed('.element', options);
</script>
@endsection