
@extends('layouts.default')

@section('content')

    <div class="container-fluid mt-3">
        <form action="{{route('posts.update' , $post->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')

            @csrf

            <div class="col-8 m-3 p-3">
                <label for="title" class="">Title</label>
                <input id="title" name="title" class="form-control border-primary" value="{{old('title' , $post->title??'')}}" >
            </div>

            <div class="col-8 m-3 p-3">
                <label for="author" class="">Author</label>
                <input id="author" name="author" class="form-control border-info" value="{{old('author' , $post->author??'')}}">
            </div>

            <div class="col-8 m-3 p-3">
                <label for="description" class="">Description</label>
                <textarea id="description" name="description" class="form-control border-warning" rows="10">
                </textarea>
            </div>

            <div class="col-8 m-3 p-3">
                <button class="btn btn-warning border rounded" type="submit">Update Post</button>
            </div>
        </form>
    </div>

@endsection
