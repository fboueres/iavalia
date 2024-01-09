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
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications ">
                      <li class="dropdown-header">
                        Módulo de Imóveis
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Seus Imóveis!</span></a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li class="notification-item">
                        <i class="bi bi-plus text-success"></i>
                        <div>
                          <h4>Novo Imóvel</h4>
                          <p>Cadastrar Novo Imóvel</p>
                        </div>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li class="notification-item">
                        <i class="bi bi-list text-primary"></i>
                        <div>
                          <h4>Lista de Imóveis</h4>
                          <p>Seus Imóveis Cadastrados</p>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                      <i class="bi bi-graph-up"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications ">
                      <li class="dropdown-header">
                        Módulo de Avaliações
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Suas Avaliações!</span></a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li class="notification-item">
                        <i class="bi bi-plus text-success"></i>
                        <div>
                          <h4>Nova Avaliação</h4>
                          <p>Criar Nova Avaliação</p>
                        </div>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li class="notification-item">
                        <i class="bi bi-list text-primary"></i>
                        <div>
                          <h4>Lista de Avaliações</h4>
                          <p>Suas Avaliações</p>
                        </div>
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