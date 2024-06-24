<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark-subtle fixed-top">
  <div class="container">
    <a class="navbar-brand text-info h1 mb-0" href="#">NFL-Mart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">NFL-Mart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
</li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-cart-plus"></i></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-chat-dots"></i></a>
        <li class="nav-item">
        <form class="d-flex " role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Product</i></a>
            </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contact</i></a>  
            </ul>
          </li>
          </li>
        </form>
      </div>
    </div>
  </div>
</nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  
  <div class="card-body ">
    <h5 class="card-title mt-2 p-4 h1  ">Special Price</h5>
    <p class="card-text">COOMING SOON</p>

    <footer class="text-info mt-2 p-1 bg-body-secondary">
        <div class="d-flex justify-content-center">
        <a class="m-3 fs-3 mb-0 text primary" href="#"><i class="bi bi-facebook"></i></i></a>
        <a class="m-3 fs-3 mb-0 text-danger-emphasis" href="#"><i class="bi bi-instagram"></i></i></i></a>
        <a class="m-3 fs-3 mb-0 text-success" href="#"><i class="bi bi-whatsapp"></i></i></i></a>
      </div>
      
      <div class="d-flex justify-content-center">
        <a class="m-3 nav-link text-black" href="#">Home</a>
        <a class="m-3 nav-link text-black" href="#">Product</a>
        <a class="m-3 nav-link text-black" href="#">Contact</a>
      </div>
    </footer>
</div>