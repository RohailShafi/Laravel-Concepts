@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md- fs-xs-5 fs-s-3 fs-md-3 fs-lg-3 fs-xl-4 text-center">
                <div class="card full-height shadow-lg p-4 m-0">
                    @if($profile)
                        <img src="{{ asset('storage/' . $profile->image) }}" class="rounded-circle mb-3" width="150" height="150" alt="Profile Image">
                        <h2>{{ $profile->name }}</h2>
                        <h5 class="text-muted">{{ $profile->designation }}</h5>
                        <h3><strong class="mt-3">Summary</strong></h3>
                        <p class="mt-2">{{ $profile->description }}</p>

                        <!-- Edit and Delete Buttons -->
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary width-25% mt-3 border rounded">Edit Profile</a>

                        <form action="{{ route('profile.delete') }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-3 border rounded" onclick="return confirm('Are you sure?')">Delete Profile</button>
                        </form>
                    @else
                        <h3 class="mb-3">No Profile Found</h3>
                        <a href="{{ route('profile.create') }}" class="btn btn-success border rounded">Create Profile</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
