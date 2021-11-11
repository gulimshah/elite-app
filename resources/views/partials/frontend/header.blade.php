<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="#">Sailor</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="#" class="logo me-auto"><img src="{{ asset('frontend/img/logo.png') }}" alt=""
                class="img-fluid"></a> --}}

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('welcome') }}" class="active">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('team') }}">Our Team</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>

                <li><a href="{{ route('contactUs') }}">Contact</a></li>
                <li><a href="{{ route('login') }}" class="getstarted">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
