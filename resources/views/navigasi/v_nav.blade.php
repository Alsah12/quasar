<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
        <a class="navbar-brand" href="/beranda">
            <span>QUASAR</span>
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto ms-auto">
          <li class="nav-item"><a href="/beranda" class="nav-link {{ request()->is('beranda')?'active':'' }}">Home</a></li>
          <li class="nav-item"><a href="/" class="nav-link {{ request()->is('')?'active':'' }}">About</a></li>
          <li class="nav-item"><a href="/service" class="nav-link {{ request()->is('service')?'active':'' }}">Service</a></li>
          <li class="nav-item"><a href="/product" class="nav-link {{ request()->is('product')?'active':'' }}">Product</a></li>
        </ul>
        <div class=" d-flex justify-content-center">
            <form action="{{ route('logout') }}" method="post">
                @csrf
            <button class="btn btn-outline-dark px-4">SIGN OUT</button>
            </form>
        </div>
      </div>
    </div>
  </nav>
