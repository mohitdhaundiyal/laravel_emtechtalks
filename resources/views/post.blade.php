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
    #recent a {
        color: black;
    }

    #recent a:hover {
        color: #ce1b28;
        text-decoration: none;
    }

    .post {
        padding-bottom: 2rem;
    }

    .reply {
        padding-top: 0;
    }

    @media screen and (max-width: 980px) {
        .recent {
            padding-bottom: 2rem;
            padding-top: 1rem;
        }

        .post {
            padding-bottom: 1rem;
        }

        .reply {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
    }

    @media screen and (max-width: 480px) {
        .recent {
            padding-bottom: 2rem;
            padding-top: 1rem;
        }

        .post {
            padding-bottom: 1rem;
        }

        .reply {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
    }
</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-1"></div>
        <div class="col-lg-7">
            <!-- Main -->
            <section id="main" class="wrapper post">
                @if($post==true)
                <div class="inner">
                    <div class="content">
                        <div>
                            <img class="img-fluid" src="{{Storage::disk('s3')->url('cover_images/'.$post->cover_image)}}">
                        </div>
                        <header>
                            <h2 style="text-transform: none;">{{$post->post_title}}</h2>
                        </header>
                        <p> {!!$post->post_body!!}</p>
                        @else
                        <div class="alert alert-danger" role="alert">
                            <b> Opps! No post found... Maybe the post is deleted.</b>
                        </div>
                        @endif
                        <hr />
                        <!-- COMMENT SECTION -->
                        @if($post==true)
                        <h3>Comments <span style="font-family: none">({{count($comments)}})</span></h3>

                        <ul class="alt">
                            @foreach($comments as $comment)
                            <li>
                                <span style="color: #4A9AD1; font-weight:600;">{{$comment->comment_name}}</span> {{$comment->comment}}<br>
                                <small>
                                    <?php
                                    $curr_time = $comment->created_at;
                                    $time_ago = strtotime($curr_time);
                                    echo time_Ago($time_ago);
                                    ?>
                                </small>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </section>

            <!-- Reply -->
            <section id="main" class="wrapper reply">
                <div class="inner">
                    <div class="content">
                        <header>
                            <h2>Leave a Reply</h2>
                        </header>
                        <form action="comment" method="post">
                            @csrf
                            <div class="form-row">
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <div class="col">
                                    <input type="text" name="comment_name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col">
                                    <input type="email" name="comment_email" class="form-control" placeholder="Email" required>
                                </div>
                            </div><br>
                            <textarea name="comment" name="comment" rows="2" class="form-control" placeholder="Comment" required></textarea><br>
                            <button type="submit" name="submit">Comment</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <!-- RECENT CARD -->
        <div class="col-lg-3">
            <section id="main" class="wrapper recent">
                <div class="inner">
                    <div class="content">
                        <header>
                            <h2>Recent Post</h2>
                        </header>
                        <ul class="alt">
                            @if(count($recent)>0)
                            @foreach($recent as $recent)
                            <li>
                                <div id="recent">
                                    <a href="post-{{$recent->id}}"><b>{{$recent->post_title}}</b></a>
                                </div>
                                <small class="text-muted">Last updated
                                    <?php
                                    $curr_time = $recent->created_at;
                                    $time_ago = strtotime($curr_time);
                                    echo time_Ago($time_ago);
                                    ?>
                                </small>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="col-lg-1"></div>
</div>
@endsection