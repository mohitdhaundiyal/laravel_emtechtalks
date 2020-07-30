@extends('layout_show')
@section('content')
@foreach($posts as $post)

@endforeach
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
    #search {
        margin-top: 6rem;
        margin-bottom: 6rem;
    }

    #search-bar {
        border-top: 0;
        border-left: 0;
        border-right: 0;
    }

    #news-card {
        margin-top: 1rem;
    }

    .form-control,
    .btn {
        border-radius: 0;
    }

    .btn {
        padding-left: 5rem;
        padding-right: 5rem;
    }

    .form-control:focus {
        box-shadow: none;
    }

    .card-body a {
        color: black;
    }

    .card-body a:hover {
        text-decoration: none;
        color: #ef1b48;
    }

    .alert {
        margin-top: 10px;
    }

    @media only screen and (max-width: 800px) {
        #search-btn {
            margin-top: 1.5rem;
        }

        .form-control {
            font-size: 10px;
        }

        #news-card {
            margin-top: 1.5rem;
        }
    }
</style>
<div class="container" id="search">
    <div class="row">
        <div class="col-lg-8">
            <form action="news" method="get">
                <input class="form-control" name="search_item" id="search-bar" type="search" placeholder="Search Post" aria-label="Search" required>
        </div>
        <div class="col-lg-4 " id="search-btn" style="text-align: center;">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            @if(count($search_items)==0)
            <div class="alert alert-warning" role="alert">
                No Post Found!
            </div>
            @endif

            @if($search_items == true)
            @foreach($search_items as $search_item)
            <div class="card" id="news-card">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{Storage::disk('s3')->url('cover_images/'.$search_item->cover_image)}}" class="card-img img-fluid" alt="No image found">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="post-{{$search_item->id}}">
                                <h5 class="card-title">{{$search_item->post_title}}</h5>
                            </a>
                            <p class="card-text">
                                <small class="text-muted">Last updated
                                    <b> <?php
                                        $curr_time = $search_item->created_at;
                                        $time_ago = strtotime($curr_time);
                                        echo time_Ago($time_ago);
                                        ?>
                                    </b>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="col-lg-1"></div>

    </div>
</div>
@endsection