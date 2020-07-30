@extends('layout')
@section('content')
<style>
    body {
        background-color: #f5f5f5;
    }

    .form-control,
    .btn {
        border-radius: 30px;
    }

    #main_container {
        margin-top: 20px;
    }

    #search {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    #top_headlines,
    #search_result,
    .img-fluid {
        border-radius: 10px;
    }

    #search-btn .btn {
        padding-left: 6rem;
        padding-right: 6rem;
    }

    .form-control:focus {
        box-shadow: none;
    }

    .card-body a {
        text-decoration: none;
        color: black;
    }

    .card-body a:hover {
        text-decoration: none;
        color: #4286f4;
    }

    @media only screen and (max-width: 700px) {
        .card-body h5 {
            font-size: 18px;
        }

        .card-body p {
            font-size: 15px;
        }

        .form-control-lg {
            height: calc(1.5em + 1rem + 2px);
            padding: .5rem 1rem;
            font-size: 1rem;
        }
    }
</style>
<div class="container" id="main_container">
    <div class="row" id="search">
        <div class="col-lg-12">
            <form action="search_result" method="get">
                <div class="input-group  animate__animated animate__backInDown animate__slow">
                    <input class="form-control form-control-lg" name="search_result" id="search-bar" type="search" placeholder="Search for topics" aria-label="Search" required>
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit"> <i class="fa fa-search" style="padding-top: 0; padding-bottom:0;"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if($result=="NULL")
    <h3 class="animate__animated animate__fadeInDown">Top Headlines</h3>
    <hr>
    @foreach($data['articles'] as $item)
    <div class="card mb-3 animate__animated animate__fadeInDown" id="top_headlines">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{$item['urlToImage']}}" class="img-fluid" alt="No image avilable...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <a href="{{$item['url']}}" target="_blank">
                        <h5 class="card-title">{{$item['title']}}</h5>
                    </a>
                    <p class="card-text">{!!$item['description']!!}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <?php $search = $_GET['search_result']; ?>
    @if($search=="")
    <div class="alert alert-info" role="alert">
        Opps! No post found.
    </div>
    @else
    <h3 class="animate__animated animate__fadeInDown">Search Result</h3>
    <hr>
    @foreach($result['articles'] as $result)
    <div class="card mb-3 animate__animated animate__fadeInDown" id="search_result">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{$result['urlToImage']}}" class="img-fluid" alt="No image avilable...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <a href="{{$result['url']}}" target="_blank">
                        <h5 class="card-title">{{$result['title']}}</h5>
                    </a>
                    <p class="card-text">{!!$result['description']!!}</p>
                    <p class="card-text"><small class="text-muted">Last updated {{$result['publishedAt']}}</small></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
    @endif
</div>
@endsection