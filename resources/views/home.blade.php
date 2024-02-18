@extends('layouts/main')

@section('container')
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/rumah1.png" class="d-block w-100" alt="Rumah mewah">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rumah Impian</h5>
        <p>Rancang rumah impian anda</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/furniture.jpg" class="d-block w-100" alt="Furnitur rumah">
      <div class="carousel-caption d-none d-md-block">
        <h5>Furnitur</h5>
        <p>Pilih furnitur sesuai kebutuhan</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/rumahkecil.jpg" class="d-block w-100" alt="Rumah dalam genggaman">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tunggu Apa Lagi</h5>
        <p>Wujudkan rumah impian anda sekarang</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <h1>Halaman Home</h1>

@endsection