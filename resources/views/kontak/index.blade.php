@extends('layouts-FE.app')

@section('style-fe')
<link rel="stylesheet" href="{{ asset('frontend/css/kontak.css') }}" />

@endsection

@section('content')
<div class="jumbotron text-center text-light">
    <h1>BILA ANDA RAGU, HUBUNGI KAMI</h1>
  </div>

  <div class="container text-center pt-5">
    <div class="row justify-content-center fw-bold">
      <div
        class="col-md-6 border text-dark"
        style="background-color: #6366f1"
      >
        <form action="https://formspree.io/f/{form_id}" method="post">
          <div class="pt-3">
            <input
              type="name"
              class="form-control"
              id="name"
              aria-describedby="name"
              placeholder="Nama Anda"
            />
          </div>
          <div class="pt-3">
            <input
              type="email"
              class="form-control"
              id="email"
              aria-describedby="emailHelp"
              placeholder="Email"
            />
          </div>
          <div class="pt-3">
            <textarea
              class="form-control"
              id="floatingTextarea2"
              style="height: 150px"
              placeholder="Pesan Anda"
            ></textarea>
            <label for="floatingTextarea2"></label>
          </div>
          <button type="submit" class="btn btn-warning mb-3">KIRIM</button>
        </form>
      </div>

      <div class="col-md-6 pt-3">
        <h3>Peta Lokasi</h3>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.2876652427535!2d106.7563919139605!3d-6.4852079652087635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c31c98b4bbf9%3A0xab47befcf2582177!2sYalla%20Wisata%20Indonesia!5e0!3m2!1sen!2sid!4v1660621355550!5m2!1sen!2sid"
          width="500"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>
  </div>

@endsection

@section('script-fe')

@endsection