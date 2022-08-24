@extends('layouts-FE.app')

@section('style-fe')

@endsection

@section('content')

<section class="banner">
    <div class="container  pt-5">
      <div class="clearfix">
        <img
          src="{{ asset('frontend/img/banner3.png') }}"
          class="col-sm-6 float-sm-end mb-3 ms-sm-3"
          alt="..."
        /> 
        <div class="gaya pt-5 " data-aos="fade-right" data-aos-duration="2000">
          <h1 class="text-white">Jasa Pembuatan Website Terbaik</h1>
          <h2 class="text-dark">Website, Aplikasi, Internet Marketing, Hosting & Domain</h2>
        </div>   
        <a
          class="btn btn-dark mt-3 text-white"
          href="https://wa.me/082284180185" target="_blank"
          role="button"
          >KONSULTASI GRATIS</a
        >
      </div>
    </div>
  </section>

  <section  >
    <div class="container jarak text-center ">  
      <h2 data-aos="fade-right" data-aos-duration="2000">Kenapa Harus Kami...</h2>
       <div class="row pt-3">
        <div class="col-md-4 mb-3">
          <img src="{{ asset('frontend/img/2.jpg') }}" class="card-img-top" style="width: 250px ; height: 250px;" alt="..." />
          <div class="card-body">
            <h4>Keamanan Website</h4>
            <p class="card-text">
              Data yang tersimpan di server lebih aman karena sistem backup
              yang handal dan backup server ada di gedung terpisah.
            </p>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <img src="{{ asset('frontend/img/1.jpg') }} " class="card-img-top"style="width: 250px ; height: 250px;" alt="..." />
          <div class="card-body">
            <h4>Desain yang Responsive</h4>
            <p class="card-text">
              User experience yang baik melalui desain website yang elegan
              serta navigasi yang mudah. Tampilan halaman terlihat keren
              sekaligus responsif apabila diakses dari smartphone, tablet,
              dll.
            </p>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <img src="{{ asset('frontend/img/3.jpg') }}" class="card-img-top" style="width: 250px ; height: 250px;" alt="..." />
          <div class="card-body">
            <h4>Maintenance Website</h4>
            <p class="card-text">
              Bebas maintenance website setiap bulan* selama 1 tahun penuh
              untuk perubahan pada halaman website dan maintenance lainnya.
            </p>
          </div>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-md-4 mb-3">
          <img src="{{ asset('frontend/img/5.jpg') }} " class="card-img-top"style="width: 250px ; height: 250px;" alt="..." />
          <div class="card-body">
            <h4>Layanan Prima 24/7</h4>
            <p class="card-text">
              Kami menyediakan layanan tanpa batas, jadi anda jangan ragu menghubungi kami di setiap saat.              </p>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <img src="{{ asset('frontend/img/6.png') }}" class="card-img-top" style="width: 250px ; height: 250px;" alt="..." />
          <div class="card-body">
            <h4>Template Siap Pakai</h4>
            <p class="card-text">
              Bosan dengan template yang itu-itu aja, kami menyediakan pilihan template yang siap digunakan untuk websitemu.
            </p>
          </div>
        </div>      
        <div class="col-md-4 mb-3">
          <img src="{{ asset('frontend/img/4.jpg') }}" class="card-img-top" style="width: 250px ; height: 250px;" alt="..." />
          <div class="card-body">
            <h4>Pengerjaan Yang Cepat</h4>
            <p class="card-text">
              Tidak berlaku bagi kami mengerjakan website waktu yang lama karena kami memastikan websitemu selesai secepatnya.
            </p>
          </div>
        </div>  
      </div>
    </div>
  </section>
  <section id="paket" class="pattern">
    <div class="container jarak text-center">
      <h2>Paket Harga Website</h2>
      <div class="row  pt-3 " data-aos="zoom-in" data-aos-duration="2000">
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
              href="#" onclick="pesan()"
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
              href="#" onclick="pesan()"
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
            
              <a class="nav-link btn btn-primary rounded-pill text-light" onclick="pesan()" class="btn" href="#">Pesan</a>
              
            </div>
          </div>
        </div>
        
        </div>
      </div>
    </div>
  </section>
  <section class="pattern">
    <div class="container jarak mb-5 text-center">
      <h2>Pilih Template Yang Anda Inginkan</h2>
      <div id="carouselExampleControls" class="carousel slide  pt-3" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('frontend/img/t1.png') }}" class="d-block w-100" alt="...">
            <a
              class=" btn btn-danger rounded-pill text-light mt-1 "
              class="btn"
              href="https://bootstrapmade.com/demo/FlexStart/" target="_blank"
              >Demo</a>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('frontend/img/t2.png') }}" class="d-block w-100" alt="...">
            <a
                class=" btn btn-danger rounded-pill text-light mt-1  "
                class="btn"
                href="https://bootstrapmade.com/demo/Kelly/" target="_blank"
                >Demo</a
              >   
          </div>
          <div class="carousel-item">
            <img src="{{ asset('frontend/img/t3.png') }}" class="d-block w-100" alt="...">
            <a
                class=" btn btn-danger rounded-pill text-light mt-1 "
                class="btn"
                href="https://bootstrapmade.com/demo/Yummy/" target="_blank"
                >Demo</a
              > 
          </div>
          <div class="carousel-item">
            <img src="{{ asset('frontend/img/t4.png') }}" class="d-block w-100" alt="...">
            <a
                class=" btn btn-danger rounded-pill text-light mt-1 "
                class="btn"
                href="https://bootstrapmade.com/demo/Yummy/" target="_blank"
                >Demo</a
              > 
          </div>
          <div class="carousel-item">
            <img src="{{ asset('frontend/img/t5.png') }}" class="d-block w-100" alt="...">
            <a
                class=" btn btn-danger rounded-pill text-light mt-1 "
                class="btn"
                href="https://bootstrapmade.com/demo/Yummy/" target="_blank"
                >Demo</a
              > 
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>      
    </div>
  </section>
  

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