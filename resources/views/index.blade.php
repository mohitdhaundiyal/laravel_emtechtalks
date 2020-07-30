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

<!-- Banner -->
<section id="banner">
    <div class="inner animate__animated animate__zoomIn">
        <h1>WELCOME TO EMTECHTALKS</h1>
        <p>
            <div class="element"></div>
        </p>
    </div>
    <video autoplay loop muted playsinline src="images/banner6.mp4"></video>
</section>

<!-- Highlights -->
<section class="wrapper">
    <div class="inner">
        <header class="special" style="margin-bottom: 2rem;" data-aos="flip-up">
            <h2>The Latest</h2>
            <hr>
        </header>
        <div class=" highlights" data-aos="fade-up">
            @if(count($posts)>0)
            @foreach($posts as $post)
            <section class="post-box animate__animated animate__fadeIn ">
                <div class="content">
                    <header>
                        <div class="post-img">
                            <a href="post-{{$post->id}}">
                                <img class="img-fluid card-image" src="https://emtechtalks.s3.us-east-2.amazonaws.com/cover_images/{{$post->cover_image}}" alt="no-image" style="height:260px;">
                            </a>
                        </div>
                        <h5 style="text-transform: none; margin-top:10px; text-align: left;"><a href="post-{{$post->id}}">{{$post->post_title}}</a></h5>
                    </header>
                    <p style="text-align: left;">
                        <?php
                        $curr_time = $post->created_at;
                        $time_ago = strtotime($curr_time);
                        echo time_Ago($time_ago);
                        ?>
                    </p>
                </div>
            </section>
            @endforeach
            @else
            <h3 style="padding:20px;">No Post Found.</h3>
            @endif
        </div>
    </div>
    <div>
        {{$posts->links()}}
    </div>
</section>

<!-- Testimonials -->
<section class="wrapper">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                    @if(Session::get('message'))
                    <div id="msg" class="alert alert-success" role="alert">
                        <b>{{Session('message')}}</b>
                    </div>
                    @endif
                    <header class="special" style="margin-bottom: 2rem;">
                        <h2>Send Message</h2>
                    </header>
                    <div class="content">
                        <form action="message" method="post">
                            @csrf
                            <input type="text" class="form-control" name="contact_name" style="border-radius:0;" placeholder="Your Name" required><br>
                            <input type="email" class="form-control" name="contact_email" style="border-radius:0;" placeholder="Your Email" required><br>
                            <textarea class="form-control" name="contact_message" style="border-radius:0;" placeholder="Message" required></textarea><br>
                            <button type="submit" name="submit">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                    <header class="special" style="margin-bottom: 2rem;" id="get_in_touch">
                        <h2>get in touch</h2>
                    </header>
                    <ul class="alt">
                        <li><a style="font-size: 1.25rem;"> <i class="fa fa-terminal" style="color:#007bff;" aria-hidden="true"></i> Mohit Dhaundiyal.</a></li>
                        <li><a style="font-size: 1.25rem;"> <i class="fa fa-envelope" style="color:#007bff;" aria-hidden="true"></i> mohit.dhaundiyal22@gmail.com</a></li>
                        <li><a style="font-size: 1.25rem;"> <i class="fa fa-phone" style="color:#007bff;" aria-hidden="true"></i> 7011013842</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection