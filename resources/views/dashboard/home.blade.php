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
            <h2 style="color:#0eb493" class="animated bounce" data-wow-duration="2s" data-wow-delay="5s"><b>Tentang Kami</b></h2>
        </div>
    </div>
    <div class="row text-justify">
        <div class="col-md-4 animated bounce slow">
            <h3><i class="fas fa-users" style="color:#0eb493;"></i> Profil</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
        </div>
        <div class="col-md-4 animated bounce fast">
            <h3><i class="fas fa-award" style="color:#0eb493;"></i> Visi</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
        </div>
        <div class="col-md-4 animated bounce faster">
            <h3><i class="fas fa-crosshairs" style="color:#0eb493;"></i> Misi</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
        </div>
    </div>
</div>
</section>

<section id="galeri" class="galeri">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center my-3">
                <h2 class="mb-4 wow slideInLeft" data-wow-duration="0.4s" animation-duration="0.25s" style="color:#0eb493;"><b>Galeri</b></h2>
                <div id="myBtnContainer"> 
                <button class="btn active" onclick="filterSelection('all')"> Semua </button>
                <button class="btn" onclick="filterSelection('karyawan')"> karyawan</button>
                <button class="btn" onclick="filterSelection('psikotest')"> Psikotest </button>
                <button class="btn" onclick="filterSelection('training')"> Training </button>
                </div>
              </div>
        </div>
    </div>
    <div class="row">
      <div class="column karyawan">
        <div class="content">
          <img class=" img-fluid wow bounce" data-wow-duration="2s" animation-duration="0.25s" src="/assets/images/galeri/galeri6.jpg" alt="">
        </div>
      </div>
      <div class="column karyawan">
        <div class="content">
          <img class=" img-fluid wow bounce" data-wow-duration="1s" animation-duration="0.5s" src="/assets/images/galeri/galeri5.jpeg" alt="">
        </div>
      </div>
      <div class="column karyawan">
        <div class="content">
          <img class=" img-fluid wow rollIn" data-wow-duration="0.4s" animation-duration="0.25s" src="/assets/images/galeri/galeri2.jpg" alt="">
        </div>
      </div>
      
      <div class="column psikotest">
        <div class="content">
          <img class=" img-fluid wow shake" data-wow-duration="0.4s" animation-duration="0.25s" src="/assets/images/galeri/galeri7.jpeg" alt="">
        </div>
      </div>
      <div class="column psikotest">
        <div class="content">
          <img class=" img-fluid wow bounce" data-wow-duration="0.5s" animation-duration="0.25s" src="/assets/images/galeri/galeri3.jpeg" alt="">

        </div>
      </div>
      <div class="column psikotest">
        <div class="content">
          <img class=" img-fluid wow bounce" data-wow-duration="0.7s" animation-duration="0.25s" src="/assets/images/galeri/galeri8.jpg" alt="">
        </div>
      </div>
    
      <div class="column training">
        <div class="content">
          <img class=" img-fluid wow bounce" data-wow-duration="1s" animation-duration="0.25s" src="/assets/images/galeri/galeri3.jpeg" alt="">
        </div>
      </div>
      <div class="column training">
        <div class="content">
          <img class=" img-fluid wow bounce" data-wow-duration="1.7s" animation-duration="0.25s" src="/assets/images/galeri/galeri8.jpg" alt="">
        </div>
      </div>
      <div class="column training">
        <div class="content">
          <img class=" img-fluid wow bounce" data-wow-duration="2s" animation-duration="0.25s" src="/assets/images/galeri/galeri6.jpg" alt="">
        </div>
      </div>
    <!-- END GRID -->
    </div>
    
    <!-- END MAIN -->
    </div>
    
<script>
  filterSelection("all")
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }
  
  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }
  
  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);     
      }
    }
    element.className = arr1.join(" ");
  }
  
  
  // Add active class to the current button (highlight it)
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
  </script>

<section id="klien">
    <div class="container-fluid bg-light">
        <div class="row text-center">
            <div class="col-md mb-3 mt-3">
                <h2 class="wow bounce" data-wow-duration="0.5s" animation-duration="0.25s" style="color:#0eb493"><b>Klien</b></h2>
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
                <h2 class="wow bounce" data-wow-duration="1s" animation-duration="0.25s" style="color:#0eb493"><b>Visitor</b></h2>
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
                <h2 class="wow bounce" data-wow-duration="1s" animation-duration="0.25s" style="color:#0eb493"><b>Service</b></h2>
            </div>
            <div class="row py-2 ml-2 mr-2 text-justify">
                <div class="col-md wow bounce" data-wow-duration="0.5s" animation-duration="0.25s">
                    <h3><i class="fas fa-file-contract" style="color:#0eb493;"></i> Outsourcing</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
                </div>
                <div class="col-md wow bounce" data-wow-duration="0.7s" animation-duration="0.25s">
                    <h3><i class="fas fa-chart-area" style="color:#0eb493;"></i> Psikotest</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
                </div>
                <div class="col-md wow bounce" data-wow-duration="0.8s" animation-duration="0.25s">
                    <h3><i class="fas fa-id-card" style="color:#0eb493;"></i> Recruitment</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
                </div>
                <div class="col-md wow bounce" data-wow-duration="0.9s" animation-duration="0.25s"	>
                    <h3><i class="fas fa-recycle" style="color:#0eb493;"></i> Motivation Training</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sapiente. Eos nemo vel veritatis harum excepturi alias beatae unde, quam accusamus iure dolor nam eius nesciunt similique pariatur sed? Quos?</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection