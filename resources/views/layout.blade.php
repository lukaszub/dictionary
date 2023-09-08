<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._head')
</head>
<body class="d-flex flex-column min-vh-100">
  @include('partials._flash-message')
  <nav class="navbar navbar-expand-lg text-bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand mb-0 h1 text-white" href="/">Dictionary</a>
      @auth
      <p class="text-muted mb-0" href="/">Witaj {{ auth()->user()->name}}</p>
      @endauth
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          @auth
          <li class="nav-item">
            <a class="nav-link me-3 text-white" aria-current="page" href="/"><i class="bi bi-book pe-1"></i>Słowniczek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 text-white" href="/words/create"><i class="bi bi-clipboard2-plus-fill pe-1"></i>Dodaj słowo</a>
          </li>
          <li class="nav-item">
            <form method="POST" action="/logout">
              @csrf
              <button type="submit" class="nav-link me-3 fs-5">
                <i class="bi bi-box-arrow-in-right pe-1"></i>Wyloguj
              </button>
            </form>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link fs-5" href="/login"><i class="bi bi-arrow-right-square-fill pe-1"></i>Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="/register"><i class="bi bi-arrow-right-square-fill pe-1"></i>Rejestracja</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')
  @include('partials._footer')
  @include('partials._jsfile')
</body>
</html>
