@extends('layouts-FE.app')

@section('style-fe')
<link rel="stylesheet" href="{{ asset('frontend/css/layanan.css') }}" />

@endsection

@section('content')
<div class="jumbotron text-center text-light">
  <h1>LAYANAN KAMI</h1>
</div>

<div class="container pt-5">
  <div class="row">
    <div class="col-md-6">
      <h2>Aplikasi Android</h2>
      <i class="fa-brands fa-android text-success"></i>
      <p>
        Android adalah software untuk perangkat mobile yang mencakup sistem
        operasi, middleware dan aplikasi kunci. Pengembangan aplikasi pada
        platform Android menggunakan bahasa pemrograman Java. Serangkaian
        aplikasi inti Android antara lain klien email, program SMS,
        kalender, peta, browser, kontak, dan lain-lain.
      </p>
      <p>
        Kami memberikan layanan perancangan, pembuatan, pembangunan,
        penggunaan dan konsultasi aplikasi Android sesuai dengan kebutuhan
        dan harapan klien.
      </p>
      <a
        class="btn btn-danger rounded-pill text-light"
        class="btn"
        href="https://wa.me/082284180185"
        >Pesan Sekarang</a
      >
    </div>
    <div class="col-md-6">
      <img
        src="{{ asset('frontend/img/layanan3.png') }}"
        alt=""
        srcset=""
        style="height: 300px"
      />
    </div>
  </div>
</div>
@endsection

@section('script-fe')

@endsection