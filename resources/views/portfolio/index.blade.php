@extends('layouts-FE.app')

@section('style-fe')
<link rel="stylesheet" href="{{ asset('frontend/css/portfolio.css') }}" />

@endsection

@section('content')
<div class="jumbotron text-center text-light">
    <h1>HASIL KARYA KAMI</h1>
</div>

  <div class="container text-center pt-5">
    <div class="row">
      <div class="col-md-4 pb-3">
        <img src="{{ asset('frontend/img/p1.png') }}" class="card-img-top" alt="..." />
        <div class="card">
          <div class="card-body">
            <a
              class="btn btn-primary rounded-pill text-light"
              class="btn"
              href="http://asahabah.com/"
              target="_blank"
              >Kunjungi</a
            >
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-3">
        <img src="{{ asset('frontend/img/p2.png') }}" class="card-img-top" alt="..." />
        <div class="card">
          <div class="card-body">
            <a
              class="btn btn-primary rounded-pill text-light"
              class="btn"
              href="http://donasipeduliumat.com/"
              target="_blank"
              >Kunjungi</a
            >
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('frontend/img/p3.png') }}" class="card-img-top" alt="..." />
        <div class="card">
          <div class="card-body">
            <a
              class="btn btn-primary rounded-pill text-light"
              class="btn"
              href="https://gooyalla.com/"
              target="_blank"
              >Kunjungi</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script-fe')

@endsection