@extends('layouts-FE.app')

@section('style-fe')
<link rel="stylesheet" href="{{ asset('frontend/css/layanan.css') }}" />

@endsection

@section('content')
<div class="jumbotron text-center text-light">
    <h1>LAYANAN KAMI</h1>
  </div>

  <section id="website ">
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-6">
          <h2>Pembuatan Website</h2>
          <p>
            Website adalah sekumpulan halaman web yang saling berhubungan yang
            umumnya berada pada peladen yang sama berisikan kumpulan informasi
            yang disediakan secara perorangan, kelompok, atau organisasi.
            Sebuah situs web biasanya ditempatkan setidaknya pada sebuah
            server web yang dapat diakses melalui jaringan seperti Internet,
            ataupun jaringan area lokal (LAN) melalui alamat Internet yang
            dikenali sebagai URL. Gabungan atas semua situs yang dapat diakses
            publik di Internet disebut pula sebagai World Wide Web atau lebih
            dikenal dengan singkatan WWW.
          </p>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('frontend/img/layanan2.jpg') }}" alt="" srcset="" />
        </div>
      </div>
    </div>
    <div class="container pt-5 text-center">
      <h2>Pilihan Harga Paket Website</h2>
      <div class="row  pt-3 " >
        <div class="col-md-4 mb-3 ">
          <div class="card border border-2 border-info">
            <div class="card-body "  style="background-color: #c49c48;">
              <h4 class="card-title fw-bold">BRONZE</h4>
              <h5 class="text-white">Harga mulai dari 800rb</h5>
              <p class="card-text">
                Cocok untuk Website Portofolio pribadi, Company Profile, Blog, dll
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="fa-solid fa-check"></i>  1 GB Disk Storage</li>
              <li class="list-group-item"><i class="fa-solid fa-check"></i>  Unlimited Bandwidth</li>
              <li class="list-group-item"><i class="fa-solid fa-check"></i>  Gratis Domain Setahun (.MY.ID)</li>               
              <li class="list-group-item"><i class="fa-solid fa-check"></i>  Free SSL/HTTPS </li>       
            </ul>
            <div class="card-body">
              <a
              class="nav-link btn btn-primary rounded-pill text-light"
              class="btn"
              href="#"
              >Pesan</a
            >
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card border border-2 border-info">
            <div class="card-body " style="background-color:#C0C0C0;">
              <h4 class="card-title fw-bold">SILVER</h5>
              <h5 class="text-white">Harga mulai dari 1.5 juta</h5>
              <p class="card-text">
                Cocok untuk Website Property, Travel, UMKM, dll
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="fa-solid fa-check"></i>  2 GB Disk Storage</li>
              <li class="list-group-item"><i class="fa-solid fa-check"></i>  Unlimited Bandwidth</li>
              <li class="list-group-item"><i class="fa-solid fa-check"></i>  Gratis Domain Setahun (.COM .NET)</li>      
              <li class="list-group-item"><i class="fa-solid fa-check"></i>  Free SSL/HTTPS </li>
                <li class="list-group-item"> <i class="fa-solid fa-check"></i>  Free Desain Logo </li>
                <li class="list-group-item"> <i class="fa-solid fa-check"></i>  Terpasang Whatsapp Chat</li>        
            </ul>
            <div class="card-body">
              <a
              class="nav-link btn btn-primary rounded-pill text-light"
              class="btn"
              href="#"
              >Pesan</a
            >        
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card border border-2 border-info">
            <div class="card-body  " style="background-color: #FFD700;">
              <h4 class="card-title fw-bold">GOLD</h4>
              <h5 class="text-white">Harga mulai dari 2.5 juta</h5>
              <p class="card-text">
                Cocok untuk Website Pemerintahan, Sekolah, E-Commerse, Media, dll
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="fa-solid fa-check"></i>  4 GB Disk Storage</li>
              <li class="list-group-item"><i class="fa-solid fa-check"></i>  Unlimited Bandwidth</li>
              <li class="list-group-item"><i class="fa-solid fa-check"></i>  Free SSL/HTTPS </li>
                <li class="list-group-item"> <i class="fa-solid fa-check"></i>  Free Desain Logo atau Banner</li>
                <li class="list-group-item"> <i class="fa-solid fa-check"></i>  Terpasang Live Chat</li>
                <li class="list-group-item"> <i class="fa-solid fa-check"></i>  Terpasang Whatsapp Chat</li>
                <li class="list-group-item"><i class="fa-solid fa-check"></i>  Gratis Domain Setahun (.COM .ID)</li>
                <li class="list-group-item"> <i class="fa-solid fa-check"></i>  Gratis Apk Android</li>
                
            </ul>
            <div class="card-body">
            
              <a
              class="nav-link btn btn-primary rounded-pill text-light"
              class="btn"
              href="#"
              >Pesan</a
            >
              
            </div>
          </div>
        </div>
    </div>
  </section>
@endsection

@section('script-fe')

@endsection