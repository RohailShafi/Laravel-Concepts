@extends('layouts.default')

@section('content')

<div class="container-fluid mt-3">
    <form action="{{route('posts.store')}}" method="POST">

        @csrf

        <div class="col-12 m-4 p-3">
            <label for="title" class="">Title</label>
            <input type="text" id="title" name="title" class="form-control border-primary" placeholder="title">
        </div>

        <div class="col-12 m-4 p-3">
            <label for="author" class="">Author</label>
            <input type="text" id="author" name="author" class="form-control border-success" placeholder="Author">
        </div>

        <div class="col-8 m-4 p-3">
            <label for="description" class="">Description</label>
            <textarea id="description" name="description" class="form-control border-info" rows="12"></textarea>
        </div>

        <div class="col-12 text-center bg-none m-0 p-0">
            <button class="btn btn-success" type="submit">Save Post
{{--                <a href="{{route('posts.store')}}">Save Post</a>--}}
            </button>
        </div>

    </form>
</div>

@endsection
