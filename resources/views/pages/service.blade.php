@extends('layouts.default')

@section('content')
    <style>
        .profile-img {
            width: 80px; /* Change to 20px if needed */
            height: 80px; /* Change to 20px if needed */
            border-radius: 5px; /* Slightly rounded corners */
            border: 2px solid white;
            position: absolute;
            top: 70px; /* Move slightly over the cover image */
            bottom: -30%;
            left: 50%;
            transform: translateX(-50%);
        }
        .col-123 {
           flex-basis: 100%;
        }
        .col-121 {
            flex-basis: 30%;
        }
        .col-122 {
            flex-basis: 50%;

        }
.row1{
    display: flex;
    flex-wrap: wrap;
}
    </style>

    <div class="container-fluid m-1">
        <div class="row g-2">
{{--            <div class="col-123 col-122 col-121 border">--}}
{{--                <h1>hellll</h1>--}}
{{--            </div>--}}
{{--            <div class="col-123 col-122 col-121 border">--}}
{{--                <h1>hellll2</h1>--}}
{{--            </div>--}}
{{--            <div class="col-123 col-122 col-121 border">--}}
{{--                <h1>hellll3</h1>--}}
{{--            </div>--}}
            @for ($i = 0; $i < 3; $i++)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-block">
                    <div class="card shadow rounded">
                        <!-- Cover Image Section -->
                        <div class="position-relative text-center mb-1 pb-1">
                            <!-- Background Cover Image -->
                            <img src="images/bg-profile.jpeg" alt="Cover Image" class="w-100 rounded" style="height: 120px; object-fit: cover;">

                            <!-- Profile Image (Responsive) -->
                            <img src="images/profile.jpg" alt="Profile Image"
                                 class="profile-img">
                        </div>

                        <!-- Profile Information -->
                        <div class="card-body text-center mt-1">
                            <h3 class="mt-3 fs-4 fs-md-3 fs-lg-2">John Doe</h3>
                            <p class="text-muted">Software Engineer</p>
                            <p class="text-secondary">"Passionate about coding and innovation."</p>
                            <p class="text-muted">Tech Enthusiast</p>

                            <!-- Diamond Icons -->
                            <div class="d-flex justify-content-center gap-3 my-3">
                                <i class="bi bi-gem text-warning fw-bold fs-4"></i>
                                <i class="bi bi-gem text-warning fw-bold fs-4"></i>
                                <i class="bi bi-gem text-warning fw-bold fs-4"></i>
                            </div>

                            <!-- Like & Link Icons -->
                            <div class="d-flex justify-content-center gap-4 my-3 text-dark fs-6">
                                <div class="d-flex align-items-center fw-bold">
                                    <i class="bi bi-hand-thumbs-up me-2"></i> <span>0</span>
                                </div>
                                <div class="d-flex align-items-center fw-bold">
                                    <i class="bi bi-link-45deg me-2"></i> <span>1</span>
                                </div>
                            </div>

                            <hr>

                            <!-- Follow, Connect, Message Buttons -->
                            <div class="d-flex justify-content-around gap-4 my-3">
                                <div class="d-flex align-items-center fw-bold text-primary">
                                    <i class="bi bi-person-plus me-2"></i>
                                    <span>Follow</span>
                                </div>
                                <div class="d-flex align-items-center fw-bold text-primary">
                                    <i class="bi bi-hand-thumbs-up me-2"></i> <span>Connect</span>
                                </div>
                                <div class="d-flex align-items-center fw-bold text-primary">
                                    <i class="bi bi-chat-right-fill me-2"></i> <span>Message</span>
                                </div>
                            </div>

                            <hr>

                            <!-- Suggest Meeting & Add BD Contacts -->
                            <div class="d-flex flex-column gap-3 mt-3">
                                <div class="d-flex align-items-center gap-2 border rounded p-3 bg-primary text-light">
                                    <i class="bi bi-calendar4-week"></i>
                                    <div class="vr">|</div>
                                    <strong>Suggest Meeting</strong>
                                </div>
                                <div class="d-flex align-items-center gap-2 border rounded p-3 text-primary">
                                    <i class="bi bi-plus"></i>
                                    <div class="vr">|</div>
                                    <strong>Add BD Contacts</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

@endsection
