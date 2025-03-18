<nav class=" navbar sticky-top navbar-expand-lg navbar-dark bg-dark rounded my-2">
    <div class="container-fluid">
        <a class="navbar-brand text-success fw-bold" href="#"><strong>My Profile</strong></a>
        <!-- Navbar Toggler Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Menu Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-light fw-bold" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link text-light fw-bold" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link text-light fw-bold" href="{{ route('service') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link text-light fw-bold" href="{{ route('contact.show') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
