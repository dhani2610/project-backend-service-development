@extends('layouts-FE.app')

@section('style-fe')
<link rel="stylesheet" href="{{ asset('frontend/css/layanan.css') }}" />

@endsection

@section('content')
<div class="jumbotron text-center text-light">
  <h1>LAYANAN KAMI</h1>
</div>
<section>
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-6">
        <h2>Internet Marketing</h2>
        <p>
          Pemasaran internet atau pemasaran elektronik (bahasa Inggris:
          Internet marketing, e-marketing, atau online-marketing) adalah
          segala upaya yang dilakukan produsen untuk melakukan pemasaran
          produk atau jasa menggunakan media elektronik atau Internet. Huruf
          'e' dalam e-marketing ini berarti elektronik yang artinya kegiatan
          pemasaran yang dimaksud dilaksanakan secara elektronik melalui
          jaringan Internet. Dengan terciptanya teknologi Internet, banyak
          hal yang ikut menggunakan awalan huruf e seperti halnya: e-mail,
          e-business, e-gov, e-society, dll.
        </p>
        <p>
          Di era yang serba online seperti sekarang, sebagian besar
          keputusan pembelian dibuat setelah audiens bersentuhan dan
          merasakan bagaimana brand Anda di internet. Kami menyediakan
          layanan untuk membantu brand Anda hadir serta tumbuh berkembang di
          Internet.
        </p>
      </div>
      <div class="col-md-6">
        <img
          src="{{ asset('frontend/img/layanan4.jpg') }}"
          alt=""
          srcset=""
          style="height: 350px"
        />
      </div>
    </div>
  </div>
</section>
@endsection

@section('script-fe')

@endsection