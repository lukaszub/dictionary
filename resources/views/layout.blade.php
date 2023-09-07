<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._head')
</head>
<body class="d-flex flex-column min-vh-100">

  <nav class="navbar navbar-expand-lg text-bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand mb-0 h1 text-white" href="/">Dictionary</a>

      <p class="text-muted mb-0" href="/">Witaj Użytkowniku</p>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link me-3 fs-5" aria-current="page" href="/"><i class="bi bi-clipboard2-fill pe-1"></i>Słowniczek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 fs-5" href="/words/create"><i class="bi bi-clipboard2-plus-fill pe-1"></i>Dodaj słowo</a>
          </li>
          <li class="nav-item">
            <form method="POST" action="/logout">
              @csrf
              <button type="submit" class="nav-link me-3 fs-5">
                <i class="bi bi-box-arrow-in-right pe-1"></i>Wyloguj
              </button>
            </form>
          </li>

          <li class="nav-item">
            <a class="nav-link fs-5" href="/login"><i class="bi bi-arrow-right-square-fill pe-1"></i>Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="/register"><i class="bi bi-arrow-right-square-fill pe-1"></i>Rejestracja</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  @yield('content')
  @include('partials._footer')
  @include('partials._jsfile')
</body>
</html>
