<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand">Pocket Pit Stop</span>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <x-nav.nav-item :active="request()->is('/')" href="/">
                        Home
                    </x-nav.nav-item>
                    @auth()
                        <x-nav.nav-item :active="request()->is('prices')" href="/services">
                            Services
                        </x-nav.nav-item>
                    @endauth
                    <x-nav.nav-item :active="request()->is('about-us')" href="/about-us">
                        About Us
                    </x-nav.nav-item>
                    <x-nav.nav-item :active="request()->is('contact')" href="/contact">
                        Contacts
                    </x-nav.nav-item>
                </ul>
            </div>
            <div>
                @guest()
                    <a class="btn btn-success me-2" href="/login" role="button">Log In</a>
                    <a class="btn btn-primary" href="/register" role="button">Register</a>
                @endguest
                @auth()
                    <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                    <a class="btn btn-danger ms-2" href="/logout" role="button">Log Out</a>
                @endauth
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="d-block fw-bold text-center p-2">
            <h1>
                {{ $heading }}
            </h1>
        </div>
        {{ $slot }}
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
