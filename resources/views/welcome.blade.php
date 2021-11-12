@extends('master')
@section('content')
  <div class="page-header section-dark" style="background-image: url('./assets/img/antoine-barres.jpg')">
    

    @if(Auth::check())
      <div class="filter"></div>
    <div class="content-center">
      <div class="container">
        <div class="title-brand">
          <h1 class="presentation-title-home">Hi,{{auth()->user()->name}}</h1>
          <h1 class="presentation-title">UangKu</h1>
          <div class="fog-low">
            <img src="./assets/img/fog-low.png" alt="">
          </div>
          <div class="fog-low right">
            <img src="./assets/img/fog-low.png" alt="">
          </div>
        </div>
        <h1 style="color: white" class="saldo">Rp. {{number_format($akhir) }}</h1>
      </div>
    </div>
    <div class="moving-clouds" style="background-image: url('./assets/img/clouds.png'); "></div>

    <h6 class="category category-absolute">Website By
      <a href="https://www.instagram.com/briliansatrian/" style="color: white">
        <h5>Brilian Satria Nusantara</h5>
      </a>
    </h6>
  </div>
  @else
  <div class="moving-clouds" style="background-image: url('./assets/img/clouds.png'); "></div>
    <div class="filter"></div>
    <div class="content-center">
      <div class="container">
        <div class="title-brand">
          <h1 class="presentation-title-home">Hai, Selamat Datang Di Dompetku.BSN</h1>

          <div class="button" style="margin-top: 20px;">

          <a href="/daftar" class="btn btn-outline-secondary">Daftar</a>
          <a href="/login" class="btn btn-outline-secondary">Login</a>
          </div>
          <div class="fog-low">
            <img src="./assets/img/fog-low.png" alt="">
          </div>
          <div class="fog-low right">
            <img src="./assets/img/fog-low.png" alt="">
          </div>
        </div>
        <h1 style="color: white" class="saldo"></h1>
      </div>
    </div>
    
    <h6 class="category category-absolute">Website By
      <a href="https://www.instagram.com/briliansatrian/" style="color: white">
        <h5>Brilian Satria Nusantara</h5>
      </a>
    </h6>
  </div>
    
    @endif
    
    
    
  @stop