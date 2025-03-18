@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-* fs-xs-5 fs-s-3 fs-md-3 fs-lg-3 fs-xl-4 text-center">
                <div class="card vh-100% shadow-lg p-4 m-0">
                    <div class="card-header bg-primary text-white border rounded text-center p-1">
                        <h3>Contact Information</h3>
                    </div>
                    <div class="card-body">

                        @foreach($contacts as $contact)
                            <p><strong>Email:</strong> {{ $contact->email }}</p>
                            <p><strong>Phone:</strong> {{ $contact->phone }}</p>
                            <p>
                                <a href="https://wa.me/{{ $contact->phone }}" class="btn btn-success btn-sm">WhatsApp</a>
                                <a href="tel:{{ $contact->phone }}" class="btn btn-primary btn-sm">Call</a>
                            </p>
                            <p>
                                <strong>LinkedIn:</strong>
                                <a href="{{ $contact->linkedin }}" target="_blank" class="text-primary fw-bold">
                                    Rohail Shafi <i class="bi bi-linkedin ms-1"></i>
                                </a>
                            </p>
                            <p>
                                <strong>Facebook:</strong>
                                <a href="{{ $contact->facebook }}" target="_blank" class="text-primary fw-bold">
                                    Rohail Shafi <i class="bi bi-facebook ms-1"></i>
                                </a>
                            </p>
                            <p>
                                <strong>Tik Tok:</strong>
                                <a href="{{ $contact->tiktok }}" target="_blank" class="text-primary fw-bold">
                                    Rohail Shafi <i class="bi bi-tiktok ms-1"></i>
                                </a>
                            </p>
                        @endforeach

                    <!-- Update Button -->
                        <a href="{{ route('contact.create') }}" class="btn btn-warning">Edit Contact</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
