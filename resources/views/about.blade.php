@extends('layout')
@section('content')
<style>
    .jumbotron {
        border-radius: 0;
        margin-top: 20px;
        margin-bottom: 40px;
    }

    body {
        background-color: black;
    }

    h5 a {
        color: #ef1b48;
    }

    h5 a:hover {
        text-decoration: none;
        color: black;
    }

    .top-img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 250px;
        width: 250px;
    }

    @media only screen and (max-width: 700px) {

        .display-4 {
            font-size: 30px;
        }

        .lead {
            font-size: 15px;
        }

        h5 {
            font-size: 15px;
        }
    }
</style>
<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="col-lg-12">
            <img class="top-img" src=" HD1.png">
            <div class="jumbotron">
                <h1 class="display-4">This is emTechTalks!</h1>
                <p class="lead">Tech For You.</p>
                <hr class="my-4">
                <h5>For Latest Tech News and Updates Follow emtechtalks on <a href="https://www.instagram.com/emtechtalks/" target="_blank">Instagram.</a></h5>
            </div>
        </div>
    </div>
</div>

@endsection