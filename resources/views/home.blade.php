@extends('layouts.main')

@section('beranda')

<div class="row">

  <div class="col-md-2">
    <ul class="list-group-flush p-2 pt-5">
      <li class="list-group-item  bg-primary text-light"><i class="fas fa-list me-2"></i>Kategori Produk</li>
      <a href="#makanan"><li class="list-group-item"><i class="fas fa-angle-right me-2"></i>Makanan</li></a>
      <a href="#minuman"><li class="list-group-item"><i class="fas fa-angle-right me-2"></i>Minuman</li></a>
      <a href="#cemilan"><li class="list-group-item"><i class="fas fa-angle-right me-2"></i>Cemilan</li></a>
      <a href="/product"><li class="list-group-item"><i class="fas fa-angle-right me-2"></i>Produk Lainnya..</li></a>
  </ul>

  </div>
  <div class="col-md-10">
    {{-- carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/domi2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/domi1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/img/domi3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    {{-- end carousel --}}


    {{-- Makanan --}}
    <section id="makanan">
      <h4 class="text-center font-weight-bold pt-4">Makanan</h4>
      <div class="row mx-auto">
        <div class="card mt-4 ms-2 me-2" style="width: 16rem;">
            <img src="assets/img/domi2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Domi Savory</h5>
                <p class="card-text">Deskripsi Produk</p>
                <a href="#" class="btn btn-danger">Rp. 25.000</a>
                <a href="#" class="btn btn-primary"> <i class="fas fa-shopping-cart text-light"></i></a>
              </div>
        </div>

        <div class="card mt-4 ms-2 me-2" style="width: 16rem;">
          <img src="assets/img/domi1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Domi Crunchy</h5>
              <p class="card-text">Deskripsi Produk</p>
              <a href="#" class="btn btn-danger">Rp. 25.000</a>
              <a href="#" class="btn btn-primary"> <i class="fas fa-shopping-cart text-light"></i></a>
            </div>
      </div>

      <div class="card mt-4 ms-2 me-2" style="width: 16rem;">
        <img src="assets/img/domi3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Paket Domix B</h5>
            <p class="card-text">Deskripsi Produk</p>
            <a href="#" class="btn btn-danger">Rp. 30.000</a>
            <a href="#" class="btn btn-primary"> <i class="fas fa-shopping-cart text-light"></i></a>
          </div>
    </div>

    <div class="card mt-4 ms-2 me-2" style="width: 16rem;">
      <img src="assets/img/produk1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Domi Full Colour</h5>
          <p class="card-text">Deskripsi Produk</p>
          <a href="#" class="btn btn-danger">Rp. 20.000</a>
          <a href="#" class="btn btn-primary"> <i class="fas fa-shopping-cart text-light"></i></a>
        </div>
    </div>
    </section>
    {{-- End Makanan --}}

    {{-- Minuman --}}
    <section id="minuman">
      <h4 class="text-center font-weight-bold pt-4">Minuman</h4>
      <div class="row mx-auto">
        <div class="card mt-4 ms-2 me-2" style="width: 16rem;">
            <img src="assets/img/3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nama Produk</h5>
                <p class="card-text">Deskripsi Produk</p>
                <a href="#" class="btn btn-danger">Rp. 10.000</a>
                <a href="#" class="btn btn-primary"> <i class="fas fa-shopping-cart text-light"></i></a>
              </div>
        </div>

        <div class="card mt-4 ms-2 me-2" style="width: 16rem;">
          <img src="assets/img/3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nama Produk</h5>
              <p class="card-text">Deskripsi Produk</p>
              <a href="#" class="btn btn-danger">Rp. 10.000</a>
              <a href="#" class="btn btn-primary"> <i class="fas fa-shopping-cart text-light"></i></a>
            </div>
      </div>

      <div class="card mt-4 ms-2 me-2" style="width: 16rem;">
        <img src="assets/img/3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nama Produk</h5>
            <p class="card-text">Deskripsi Produk</p>
            <a href="#" class="btn btn-danger">Rp. 10.000</a>
            <a href="#" class="btn btn-primary"> <i class="fas fa-shopping-cart text-light"></i></a>
          </div>
    </div>

    <div class="card mt-4 ms-2 me-2" style="width: 16rem;">
      <img src="assets/img/3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nama Produk</h5>
          <p class="card-text">Deskripsi Produk</p>
          <a href="#" class="btn btn-danger">Rp. 10.000</a>
          <a href="#" class="btn btn-primary"> <i class="fas fa-shopping-cart text-light"></i></a>
        </div>
    </div>
    </section>
    {{-- End Minuman --}}

    {{-- Cemilan --}}
    <section id="cemilan">
      <h4 class="text-center font-weight-bold pt-4">Cemilan</h4>
      <div class="row mx-auto">
        <div class="card mt-4 ms-2 me-2" style="width: 16rem;">
            <img src="assets/img/produk1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Domi Full Colour</h5>
                <p class="card-text">Deskripsi Produk</p>
                <a href="#" class="btn btn-danger">Rp. 20.000</a>
                <a href="#" class="btn btn-primary"> <i class="fas fa-shopping-cart text-light"></i></a>
              </div>
        </div>

        <div class="card mt-4 ms-2 me-2" style="width: 16rem;">
          <img src="assets/img/produk4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Domi Sticky</h5>
              <p class="card-text">Deskripsi Produk</p>
              <a href="#" class="btn btn-danger">Rp. 25.000</a>
              <a href="#" class="btn btn-primary"> <i class="fas fa-shopping-cart text-light"></i></a>
            </div>
      </div>

      <div class="card mt-4 ms-2 me-2" style="width: 16rem;">
        <img src="assets/img/produk2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Domi Classic</h5>
            <p class="card-text">Deskripsi Produk</p>
            <a href="#" class="btn btn-danger">Rp. 20.000</a>
            <a href="#" class="btn btn-primary"> <i class="fas fa-shopping-cart text-light"></i></a>
          </div>
    </div>

    <div class="card mt-4 ms-2 me-2" style="width: 16rem;">
      <img src="assets/img/produk3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Paket Domix A</h5>
          <p class="card-text">Deskripsi Produk</p>
          <a href="#" class="btn btn-danger">Rp. 25.000</a>
          <a href="#" class="btn btn-primary"> <i class="fas fa-shopping-cart text-light"></i></a>
        </div>
    </div>
    </section>

    <div class="d-grid gap-2 col-2 mx-auto mt-5">
      <a href="/product"><button class="btn btn-outline-danger" type="button">Lihat Semua Produk</button></a>
    </div>

  </div>

  

</div>




       


            <div class="col-md-2 bg-light">
              
          </div>

@endsection


