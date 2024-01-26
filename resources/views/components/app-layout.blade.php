<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME', 'iAvalia') }}</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>
    <body class="toggle-sidebar">
      <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="favicon.ico" alt="iAvalia Logo">
                <span class="d-none d-lg-block">iAvalia</span>
            </a>
        </div>
        <nav class="header-nav">
            <ul class="d-flex align-items-center">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                  <i class="bi bi-house"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="nav-item">
                    <a href="{{ route('residence.create') }}" class="nav-link"><i class="bi bi-plus"></i></a>
                  </li>
                </ul>
              </li>
            </ul>
        </nav>
      </header>
      <main id="main" class="main">
          {{ $slot }}
      </main>
    </body>
</html>