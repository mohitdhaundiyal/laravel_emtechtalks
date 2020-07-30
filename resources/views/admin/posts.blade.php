@extends('admin.layout_post')
@section('content')
<style>
    .no_post_link {
        color: blue;
    }

    .no_post_link:hover {
        text-decoration: none;
        color: #18d26e;
    }
</style>
<div class="container">
    <h1>Latest Posts</h1>
    @if(count($posts)>0)
    @foreach($posts as $post)
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{Storage::disk('s3')->url('cover_images/'.$post->cover_image)}}" height="300px" class=" img-fluid card-img" alt="image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><a href="show-{{$post->id}}">{{$post->post_title}}</a></h5>
                    <p class="card-text"><small class="text-muted">Written on {{$post->created_at}}</small></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <h3>No Post Found. <a class="no_post_link" href="create">Create Post</a></h3>
    @endif

    {{$posts->links()}}
</div>
@endsection