@extends('layouts.default')

{{--@extends('layouts.app')--}}

@section('content')
    <style>
        /* Triangle effect on cover image */
        .profile-cover {
            height: 120px; /* Adjust to make it shorter */
            object-fit: cover;
            /*clip-path: polygon(0% 0%, 100% 0%, 50% 100%);*/
        }

        /* Square profile image */
        .profile-img {
            width: 80px; /* Change to 20px if needed */
            height: 80px; /* Change to 20px if needed */
            border-radius: 5px; /* Slightly rounded corners */
            border: 2px solid white;
            position: absolute;
            top: 80px; /* Move slightly over the cover image */
            left: 50%;
            transform: translateX(-50%);
        }
        *{
            font-size: 1.5rem;
        }
    </style>

    <div class="container m-0">
        <!-- Cover Image -->
        <div class="position-relative text-center">
            <!-- Cover Image (Triangle Shape) -->
            <img src="{{ asset('images/bg-profile.jpeg') }}" alt="Cover Image" class="w-100 rounded profile-cover">

            <!-- Profile Image (Square & Centered) -->
            <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image" class="profile-img">
        </div>

        <!-- Profile Info -->
        <div class="profile-card bg-white p-3 rounded shadow text-center">
            <h3 class="mt-4">John Doe</h3>
            <p class="text-muted">Software Engineer</p>
            <p class="text-secondary">"Passionate about coding and innovation."</p>
            <p class="text-muted">Tech Enthusiast</p>

{{--            diamond icons--}}
            <div class="d-flex justify-content-center gap-4 my-3">
                <i class="bi bi-gem text-brown fw-bold fs-4"></i>
                <i class="bi bi-gem text-brown fw-bold fs-4"></i>
                <i class="bi bi-gem text-brown fw-bold fs-4"></i>
            </div>

            <!-- Icons -->
            <div class="d-flex justify-content-center gap-3 my-3">
                <div>
                    <i class=" btn btn-primary bi bi-hand-thumbs-up">0</i>
                </div>
                <div>
                    <i class="btn btn-primary bi bi-link-45deg icons">0</i>
                </div>
            </div>

            <hr>

            <!-- Follow, Connect, Message -->
            <div class="d-flex justify-content-between gap-3">
                <div class="d-flex">
                    <i class=" btn btn-primary bi bi-person-plus"></i>
                    <h3 class="text-primary ml-3">Follow</h3>
                </div>
                <div class="d-flex">
                    <i class=" btn btn-primary bi bi-hand-thumbs-up"></i>
                    <h3 class="text-primary ml-3">Connect</h3>
                </div>
                <div class="d-flex">
                    <i class=" btn btn-primary bi bi-chat-right-fill"></i>
                    <h3 class="text-primary ml-3">Message</h3>
                </div>
            </div>

            <hr>

            <!-- Suggest Meeting & Add BD Contacts -->
            <div class="d-flex justify-content-start bg-primary align-items-center gap-3 border rounded w-50 p-3">
                <div class="d-flex align-items-center gap-2 ps-4">
                    <i class="bi bi-calendar4-week text-light"></i>
                    <div class="vr"></div>
                    <span class="text-white"><strong>Suggest Meeting</strong></span>
                </div>
            </div>

            <div class="d-flex justify-content-start align-items-center gap-3 mt-3 border rounded w-50 p-3">
                <div class="d-flex align-items-center gap-2 ps-4">
                    <i class="bi bi-plus-circle text-success"></i>
                    <div class="vr"></div>
                    <span class="text-primary"><strong>Add BD Contacts</strong></span>
                </div>
            </div>
    </div>
@endsection
