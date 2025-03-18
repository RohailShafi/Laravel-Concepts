@extends('layouts.default')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body border border-info rounded bg-success">
                        <h3 class="text-center mb-4">Edit Profile</h3>

                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control border-info rounded" value="{{ $profile->name ?? '' }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Designation</label>
                                <input type="text" name="designation" class="form-control border-info rounded" value="{{ $profile->designation ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control border-info rounded" rows="4" >{{ $profile->description ?? '' }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Profile Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

{{--                            <div class="mb-3">--}}
{{--                                <label class="form-label">Profile Image</label>--}}
{{--                                <input type="file" id="imageInput" class="form-control">--}}
{{--                            </div>--}}

{{--                            <!-- Cropper.js Preview -->--}}
{{--                            <div class="mb-3">--}}
{{--                                <img id="imagePreview" class="img-fluid" style="max-width: 100%; display: none;">--}}
{{--                            </div>--}}

{{--                            <!-- Crop Button -->--}}
{{--                            <button type="button" id="cropImageBtn" class="btn btn-primary" style="display: none;">Crop & Upload</button>--}}

{{--                            <!-- Hidden Input to Store Cropped Image Data -->--}}
{{--                            <input type="hidden" name="cropped_image" id="croppedImageData">--}}

                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Update Profile</button>
                                <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
