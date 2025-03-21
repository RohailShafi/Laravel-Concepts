@extends('layouts.default')

@section('content')
    <style>

        .responsive-text {
            font-size: clamp(1rem, 1vw + 0.5rem, 2rem);
        }
        /*!* Small devices *!*/
        /*.text-responsive {*/
        /*    font-size: 1.9rem;*/
        /*}*/

        /*!* Medium devices *!*/
        /*@media (min-width: 768px) {*/
        /*    .text-responsive {*/
        /*        font-size: 1.3rem;*/
        /*    }*/
        /*}*/

        /*!* Large devices *!*/
        /*@media (min-width: 992px) {*/
        /*    .text-responsive {*/
        /*        font-size: 1.3rem;*/
        /*    }*/
        /*}*/

    </style>

<div class="container responsive-text">
    <div class="text-center">
        <h1 ><strong>Posts</strong></h1>
        <a class="btn btn-primary mb-2" href="{{route('posts.create')}}"> Create A New Post</a>
    </div>

    <table class="table table-responsive table-responsive-xs table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-responsive-xxl responsive-text">
        <thead>
        <tr class="col">
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->author}}</td>
            <td>{{$post->description}}</td>
            <td>
                <div class="d-flex gap-3">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">EDIT</a>

                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
{{--    @foreach($posts as $post)--}}
{{--        <div class="row">--}}
{{--            <div class="col">--}}
{{--                <h1>Title : </h1>--}}
{{--                <h3>{{$post->title}}</h3>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <h2>Author Name : </h2>--}}
{{--                <h5>{{$post->author}}</h5>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <h1>Description : </h1>--}}
{{--                <p>{{$post->description}}</p>--}}
{{--            </div>--}}
{{--            <div class="col d-flex align-items-center">--}}
{{--                <h1 class="me-3">Actions:</h1>--}}
{{--                <div class="d-flex gap-3">--}}
{{--                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">EDIT</a>--}}

{{--                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <button class="btn btn-danger" type="submit">DELETE</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    @endforeach--}}

</div>

@endsection
