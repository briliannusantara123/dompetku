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
        <h5 style="color: white;margin-bottom: 40px; background-color: rgba(255, 255, 255,0.1); padding: 10px;border-radius: 5px; text-align: center;">Form Daftar</h5>
        <form action="/daftar/create" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
  
  <div class="form-group">
    <label for="exampleInputEmail1" style="color: white">Username</label>
    <input name="name"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" style="color: white">Password</label>
    <input name="password"type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">

  </div>
  
 

  <a href="/" class="btn btn-danger">Kembali</a>
  <button type="submit" class="btn btn-primary">Daftar</button>


</form>

      </div>

    </div>
    
    <h6 class="category category-absolute">Website By
      <a href="https://www.instagram.com/briliansatrian/" target="_blank" style="color: white">
        <h5>Brilian Satria Nusantara</h5>
      </a>
    </h6>
  </div>

  @stop
