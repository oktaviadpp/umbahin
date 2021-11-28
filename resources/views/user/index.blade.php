@extends('layouts.user')
<!-- ======= Hero Section ======= -->
@section('content')
 
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Pilihan Terbaik Untuk Laundry Cepat, Murah, Bersih dan Wangi</h1>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="/css/user/assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Layanan yang Kami Berikan</h2>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                  @foreach ($laundrykats as $lk)
                      
                  <div class="col-md-6 icon-box" data-aos="fade-up">
                      <i class="bx bx-receipt"></i>
                      <h4>{{$lk->nama_kategori}}</h4>
                      <p>{{$lk->cuplikan}}</p>
                      <p>Durasi pengerjaan : +- {{$lk->durasi}} hari</p>
                    </div>
                    @endforeach
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="/css/user/assets/img/laundry.jpg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="/css/user/assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <div class="section-title">
                <h2>Tentang Kami</h2>
              </div>
              @foreach ($about_us as $about)
            <h3>{{$about->judul}}</h3>
                
            <p class="fst-italic">
                {!!$about->isi!!}
            </p>
            
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimoni Foto</h2>
          <p>Beberapa foto dari pelanggan kami</p>
        </div>

      </div>
      
      <div class="container-fluid" data-aos="fade-up">
        <div class="gallery-slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              @foreach ($testimonis as $tes)
              <a href="/gambar/{{$tes->gambar}}" class="gallery-lightbox" data-gall="gallery-carousel">
                <img src="/gambar/{{$tes->gambar}}" class="img-fluid" alt="">
                {{$tes->kategori->nama_kategori}}
              </a>
              @endforeach
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      
    </section><!-- End Gallery Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Harga Layanan Kami</h2>
          <p>Kami datang dengan harga yang terjangkau tetapi mempunya hasil akhir yang memuaskan</p>
        </div>

        <div class="row no-gutters">
          @foreach ($laundrykats as $lk)
          <div class="col-lg-4 box" data-aos="fade-up">
            <h3>{{$lk->nama_kategori}}</h3>
            <h4>{{$lk->harga}}<span>/kg</span></h4>
            <p>{{$lk->cuplikan}}</p>
            <p>Durasi : -+ {{$lk->durasi}} hari</p>
            <ul>
              <li>{!!$lk->deskripsi!!}</li>
            </ul>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Pricing Section -->
   
    @endsection