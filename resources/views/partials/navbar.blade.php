<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm">
    <div class="container">
    <h3><i class="fas fa-shopping-cart text-light  me-2"></i></h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand font-weight-bold" href="/">DOMI</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ms-auto mb-2 me-4 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Home") ? 'active' : '' }}" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Product") ? 'active' : '' }}" href="/product">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "About") ? 'active' : '' }}" href="/about">Tentang Kami</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
        <div class="icon">
        <a href="/"><i class="fas fa-shopping-cart text-light  ms-3" href="/"></i></a>
        <a href="/"><i class="fas fa-user text-light ms-3"></i></a>
        </div>
      </div>
    </div>
  </nav>
  