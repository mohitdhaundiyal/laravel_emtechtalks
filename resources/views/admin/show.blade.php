@extends('admin.layout_post')
@section('content')
<style>
    .card {
        margin: 30px;
    }

    .btn {
        border-radius: 0;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card">
                <img src="{{Storage::disk('s3')->url('cover_images/'.$post->cover_image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$post->post_title}}</h5>
                    <p class="card-text">{!!$post->post_body!!}</p>
                </div>
                <a class="btn btn-danger" href="delete_post.{{$post->id}}">Delete</a>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>

@endsection