@extends('master')
@section('content')
  <div class="page-header section-dark" style="background-image: url('./assets/img/antoine-barres.jpg')">
    <div class="moving-clouds" style="background-image: url('./assets/img/clouds.png'); "></div>
    <div class="filter"></div>
    <div class="content-center">
      <div class="container">
         @if( $message = Session::get('success'))
                  <div class="alert alert-success">
                    <strong>{{$message}}</strong>
                  </div>
                @endif
                <a href="/" class="btn btn-danger">Kembali</a>
        <h5 style="color: white;margin-bottom: 40px; background-color: rgba(255, 255, 255,0.1); padding: 10px;border-radius: 5px; text-align: center;">Halaman Admin</h5>
        
      </div>
      <h5 style="color: white; background-color: rgba(255, 255, 255,0.1); padding: 10px;border-radius: 5px; text-align: center;">Jumlah User <br><i class="fa fa-user"></i>{{$hitung}}</h5>
      <h5 style="color: white; background-color: rgba(255, 255, 255,0.1); padding: 10px;border-radius: 5px; text-align: center;">Jumlah Seluruh Uang <br><i class="fa fa-money"></i>Rp. {{number_format($total) }}</h5>
      <h5 style="color: white; background-color: rgba(255, 255, 255,0.1); padding: 10px;border-radius: 5px; text-align: center;">Banyak Data Pemasukan <br><i class="fa fa-file"></i>{{$tpemasukan}}</h5>
      <h5 style="color: white; background-color: rgba(255, 255, 255,0.1); padding: 10px;border-radius: 5px; text-align: center;">Banyak Data Pengeluaran <br><i class="fa fa-file"></i>{{$tpengeluaran}}</h5>
      
    </div>
    
    <h6 class="category category-absolute">Website By
      <a href="https://www.instagram.com/briliansatrian/" target="_blank" style="color: white">
        <h5>Brilian Satria Nusantara</h5>
      </a>
    </h6>
  </div>

  @stop
