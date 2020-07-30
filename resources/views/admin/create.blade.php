@extends('admin.layout_post')

@section('content')
<style>
    .btn {
        border-radius: 0;
        padding-right: 50px;
        padding-left: 50px;
    }
</style>

<div class="container-fluid" id="main-container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            @if(Session::get('success_pass'))
            <div class="alert alert-success" role="alert">
                {{session('success_pass')}}
            </div>
            @endif

            <h1>Create Post</h1>
            <form action="create_post" method="post" enctype="multipart/form-data">
                @csrf
                <input class="form-control" type="text" name="post_title" placeholder="Title" required><br>
                <textarea class="form-control" name="post_body" id="post-ckeditor" placeholder="Write content..."></textarea><br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="cover_image" aria-describedby="inputGroupFileAddon01" required>
                        <label class="custom-file-label" for="inputGroupFile01">Choose cover photo</label>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Post</button>
            </form>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#post-ckeditor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection