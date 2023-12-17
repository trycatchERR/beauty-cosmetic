<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
    <div class="container">
        <a class="navbar-brand" href="/">Beauty Cosmetics<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="@if (request()->path() == '/') nav-item active @endif">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="@if (request()->path() == 'products') nav-item active @endif">
                    <a class="nav-link" href="/products">Products</a>
                </li>
                <li class="@if (request()->path() == 'about') nav-item active @endif">
                    <a class="nav-link" href="/about">About us</a>
                </li>
                <li class="@if (request()->path() == 'contact') nav-item active @endif">
                    <a class="nav-link" href="/contact">Contact us</a>
                </li>
            </ul>

            @if(auth()->check())
            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li>
                    <a class="nav-link" href="/cart"><img src="images/cart.svg" /></a>
                </li>
                <li>
                    <a class="nav-link" href="/profile"><img src="images/user.svg" /></a>
                </li>
                <li>
                    <a class="nav-link" href="/history" style="color: white; margin-left: 15px;">
                        <i class="fa-solid fa-clock-rotate-left fa-lg"></i>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="/logout" style="color: white; margin-left: 15px;">
                        <i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>
                    </a>
                </li>
            </ul>
            @else
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="@if (request()->path() == 'signup') nav-item active @endif">
                    <a class="nav-link" href="/signup">Sign Up</a>
                </li>
                <li class="@if (request()->path() == 'login') nav-item active @endif">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            </ul>
            @endif
        </div>
    </div>
</nav>
