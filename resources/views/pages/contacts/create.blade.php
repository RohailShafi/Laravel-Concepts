@extends('layouts.default')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-success text-white text-center">
                        <h3 class="mb-0">Create / Update Contact</h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('contact.update') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" value="{{ $contact->email ?? '' }}" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label fw-bold">Phone <span class="text-danger">*</span></label>
                                <input type="text" name="phone" value="{{ $contact->phone ?? '' }}" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label fw-bold">LinkedIn</label>
                                <input type="url" name="linkedin" value="{{ $contact->linkedin ?? '' }}" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label fw-bold">Facebook</label>
                                <input type="url" name="facebook" value="{{ $contact->facebook ?? '' }}" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label fw-bold">TikTok</label>
                                <input type="url" name="tiktok" value="{{ $contact->tiktok ?? '' }}" class="form-control">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-lg px-4">Update Contact</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
