@extends('beranda')
@section('title')
Indopsiko- Dashboard    
@endsection
@section('content')
<section class="banner" id="banner">
    <div id="carouselExampleInterval" class="carousel slide mt-3" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <img src="/assets/images/banner/banner.jpeg" class="d-block w-100" alt="gambar">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="/assets/images/banner/banner.jpeg" class="d-block w-100" alt="gambar">
          </div>
          <div class="carousel-item">
            <img src="/assets/images/banner/banner.jpeg" class="d-block w-100" alt="gambar">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</section>
<section class="tentang" id="tentang"> 
<div class="container-fluid text-center parallax" style="min-height:280px; background-image:url('/assets/images/bg/bg-1.jpg');">
    <div class="row">
        <div class="col-md mb-3 mt-3">
            <h2 style="color:green" class="animated bounce" data-wow-duration="2s" data-wow-delay="5s"><b>Tentang Kami</b></h2>
        </div>
    </div>
    <div class="row text-justify">
        <div class="col-md-4 animated bounce slow">
            <h3><i class="fas fa-users" style="color:green;"></i> Profil</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
        </div>
        <div class="col-md-4 animated bounce fast">
            <h3><i class="fas fa-award" style="color:green;"></i> Visi</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
        </div>
        <div class="col-md-4 animated bounce faster">
            <h3><i class="fas fa-crosshairs" style="color:green;"></i> Misi</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
        </div>
    </div>
</div>
</section>

<section id="galeri" class="galeri">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center my-3">
                <h2 class="mb-4 wow slideInLeft" data-wow-duration="0.4s" animation-duration="0.25s" style="color:green;"><b>Galeri</b></h2>
            </div>
        </div>
    </div>
</section>
<section id="work">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-lg-3 col-sm-6 col-xs-3">
        <img class=" img-fluid wow rollIn" data-wow-duration="0.4s" animation-duration="0.25s" src="assets/images/galeri/galeri2.jpg" alt="">
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3">
        <img class=" img-fluid wow shake" data-wow-duration="0.4s" animation-duration="0.25s" src="assets/images/galeri/galeri7.jpeg" alt="">
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3">
        <img class=" img-fluid wow bounce" data-wow-duration="0.5s" animation-duration="0.25s" src="assets/images/galeri/galeri3.jpeg" alt="">
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3">
          <img class=" img-fluid wow bounce" data-wow-duration="0.7s" animation-duration="0.25s" src="assets/images/galeri/galeri8.jpg" alt="">
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3">
        <img class=" img-fluid wow bounce" data-wow-duration="1s" animation-duration="0.25s" src="assets/images/galeri/galeri3.jpeg" alt="">
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-3">
        <img class=" img-fluid wow bounce" data-wow-duration="1.7s" animation-duration="0.25s" src="assets/images/galeri/galeri8.jpg" alt="">
      </div>
      <div class="col-lg-3 col-sm-6">
        <img class=" img-fluid wow bounce" data-wow-duration="2s" animation-duration="0.25s" src="assets/images/galeri/galeri6.jpg" alt="">
      </div>
      <div class="col-lg-3 col-sm-6">
        <img class=" img-fluid wow bounce" data-wow-duration="1s" animation-duration="0.5s" src="assets/images/galeri/galeri5.jpeg" alt="">
      </div>
    </div>
  </div>
</section>

<section id="klien">
    <div class="container-fluid bg-light">
        <div class="row text-center">
            <div class="col-md mb-3 mt-3">
                <h2 class="wow bounce" data-wow-duration="0.5s" animation-duration="0.25s" style="color:green"><b>Klien</b></h2>
            </div>
        </div>
        <div class="row py-3 my-3">
            <div class="col-md">
                <div class="card">
                    <img class="card-img-top wow bounce" data-wow-duration="0.5s" animation-duration="0.25s" src="/assets/images/klien/logo_kimia_farma.png" alt="logo_kimia_farma.jpg">
                 </div>
                 <div class="card-body"></div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img class="card-img-top wow bounce" data-wow-duration="0.5s" animation-duration="0.25s" src="/assets/images/klien/logo_yamaha.png" alt="logo_kimia_farma.jpg">
                  </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img class="card-img-top wow bounce" data-wow-duration="0.7s" animation-duration="0.25s" src="/assets/images/klien/logo_mayora.png" alt="logo_kimia_farma.jpg">
                  </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img class="card-img-top wow bounce" data-wow-duration="1s" animation-duration="0.25s" src="/assets/images/klien/56693.jpg" alt="logo_kimia_farma.jpg">
                  </div>
            </div>
        </div>
    </div>
</section>

<section id="visitor">
    <div class="container-fluid parallax text-center" style="min-height:280px; background-image:url('/assets/images/bg/bg.jpg');">
        <div class="row">
            <div class="col-md mb-3 mt-3">
                <h2 class="wow bounce" data-wow-duration="1s" animation-duration="0.25s" style="color:green"><b>Visitor</b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="employees">
                    <p class="counter-count text-light">99088</p>
                    <p class="employee-p text-light wow bounce" data-wow-duration="1s" animation-duration="0.25s"><b>Pengunjung</b></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="service" class="service">
    <div class="container-fluid text-center" style="min-height:350px;">
        <div class="row">
            <div class="col-md mb-3 mt-3 bg-light">
                <h2 class="wow bounce" data-wow-duration="1s" animation-duration="0.25s" style="color:green"><b>Service</b></h2>
            </div>
            <div class="row py-2 ml-2 mr-2 text-justify">
                <div class="col-md wow bounce" data-wow-duration="0.5s" animation-duration="0.25s">
                    <h3><i class="fas fa-file-contract" style="color:green;"></i> Outsourcing</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
                </div>
                <div class="col-md wow bounce" data-wow-duration="0.7s" animation-duration="0.25s">
                    <h3><i class="fas fa-chart-area" style="color:green;"></i> Psikotest</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
                </div>
                <div class="col-md wow bounce" data-wow-duration="0.8s" animation-duration="0.25s">
                    <h3><i class="fas fa-id-card" style="color:green;"></i> Recruitment</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
                </div>
                <div class="col-md wow bounce" data-wow-duration="0.9s" animation-duration="0.25s"	>
                    <h3><i class="fas fa-recycle" style="color:green;"></i> Motivation Training</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection