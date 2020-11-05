<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">
        <img src="{{asset('images/logo/logo.jpg')}}" alt="ayo" title="ayo">
    </a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item {{ (Request::route()->getName() == 'home') ? 'active' : '' }}">
                <a class="nav-link" href="/">
                    Home
                </a>
            </li>
            <li class="nav-item {{ (Request::route()->getName() == 'services') ? 'active' : '' }}">
                <a class="nav-link" href="/services">
                    services
                </a>
            </li>
            <li class="nav-item {{ (Request::route()->getName() == 'about') ? 'active' : '' }}">
                <a class="nav-link" href="/about">
                    About Us
                </a>
            </li>
            <li class="nav-item {{ (Request::route()->getName() == 'contact') ? 'active' : '' }}">
                <a class="nav-link" href="/contact">
                    Contact Us
                </a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="/login">
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">
                        Register
                    </a>
                </li>
            @else
                <li class="nav-item {{ (Request::route()->getName() == 'profile') ? 'active' : '' }}">
                    <a class="nav-link" href="/profile">
                        Profile
                    </a>
                </li>
            @endguest
        </ul>
    </div>
</nav>
