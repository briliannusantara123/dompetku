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
        <h5 style="color: white;margin-bottom: 40px; background-color: rgba(255, 255, 255,0.1); padding: 10px;border-radius: 5px; text-align: center;">Laporan Pemasukan Uang</h5>
        
      </div>
      <table class="table table-hover" id="myTable">
                    <thead>
                    <tr>
                      <th style="color: white;">Tanggal</th>
                      <th style="color: white;">Banyak Uang</th>
                      <th style="color: white;">Deskripsi</th>
                      
                    </tr>
                    </thead>
                  
                    <tbody>
                      @foreach( $lp as $l )
                      <tr>
                        <td style="color: white;">{{ date('d F Y',strtotime($l->tanggal)) }}</td>
                        <td style="color: white;">Rp. {{number_format($l->pemasukan) }}</td>
                        <td style="color: white;">{{$l->deskripsi}}</td>
                        
                        
                        <td>
                          
                          
                        
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  {{ $lp->links() }}
                  </table>

    </div>
    
    <h6 class="category category-absolute">Website By
      <a href="https://www.instagram.com/briliansatrian/" target="_blank" style="color: white">
        <h5>Brilian Satria Nusantara</h5>
      </a>
    </h6>
  </div>

  @stop
