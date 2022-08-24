@extends('layouts-FE.app')

@section('style-fe')
<link rel="stylesheet" href="{{ asset('frontend/css/layanan.css') }}" />

<style>
  h3.success {
      color: #008000;
      text-align: center;
  }
  h3.fail {
      color: #ff0000;
      text-align: center;
  }
</style>
@endsection

@section('content')
<div class="jumbotron text-center text-light">
  <h1>LAYANAN KAMI</h1>
</div>
<div class="container pt-5">
  <div class="row">
    <div class="col-md-6">
      <h2>Domain</h2>

      <p>
        Domain adalah alamat website yang akan mempermudah kita untuk
        menemukannya di internet. Contohnya domain antara lain seperti .com,
        .id, .org, dan masih banyak lainnya.
      </p>
      <p>
        Kami menyediakan pilihan domain yang anda inginkan, agar website
        anda dapat dilihat orang dimanapun.
      </p>

      <!-- <a
        class="btn btn-danger rounded-pill text-light"
        class="btn"
        href="https://wa.me/082284180185"
        >Pesan Sekarang</a
      > -->
    </div>
    <div class="col-md-6">
      <img src="{{ asset('frontend/img/domain.jpg') }}" alt="" srcset="" style="height: 350px" />
    </div>
  </div>
</div>
<div class="container pt-5 text-center">
  <h3>Cek Domain Anda!</h3>
  <form class="d-grid gap-2 col-md-6 mx-auto d-flex">
    <input class="form-control " name="domain" id="domain" type="search" value="@php if(isset($_GET['domain'])){ echo $_GET['domain']; } @endphp" placeholder="Cari Nama Domain Anda" aria-label="Search">
    <button class="btn btn-primary" type="submit" >Cari</button>
    <br>
  </form>
  <br>
  @php
      error_reporting(0);
      if(isset($_GET['domain'])){
          $domain = $_GET['domain'];
          if ( gethostbyname($domain) != $domain ) {
              echo "<h3 class='fail'>Domain Already Registered!</h3>";
          }
          else {
              echo "<h3 class='success'>Hurry, your domain is available!, you can register it.</h3><br>";
              echo "<a class='nav-link btn btn-primary rounded-pill text-light' href='#paket' onclick='pesan()'>Pesan</a>";
          }
      }
  @endphp
</div>
<div class="container pt-5">
  <div class="row">
    <div class="col-md-6 pt-3">
      <img
        src="{{ asset('frontend/img/hosting.jpg') }}"
        alt=""
        srcset=""
        style="height: 350px"
      />
    </div>
    <div class="col-md-6">
      <h2>Hosting</h2>

      <p>
        Hosting menurut Hostinger adalah layanan online yang memungkinkan
        penggunanya untuk mempublikasikan suatu situs web atau aplikasi web
        di internet.
      </p>
      <p>
        Jenis-Jenis Hosting terdiri dari Shared Hosting, Cloud Hosting, VPS
        Hosting dan WordPress Hosting
      </p>
      <p>
        Kami menyediakan pilihan hosting yang anda inginkan, agar website
        anda lebih aman, peforma tinggi dan menyimpan data yang maximal.
      </p>

      <a
        class="btn btn-danger rounded-pill text-light"
        class="btn"
        href="https://wa.me/082284180185"
        >Selengkapnya</a
      >
    </div>
  </div>
</div>
@endsection

@section('script-fe')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function pesan(){
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
    title: 'Login',
    text: "Anda Harus Login Dahulu Untuk Memesan!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Login',
    cancelButtonText: 'cancel!',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = "/login-kuy"
    } else if (
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelled',
      )
    }
  })
  }
</script>
@endsection