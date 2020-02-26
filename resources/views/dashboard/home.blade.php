@extends('beranda')
@section('title')
Indopsiko- Dashboard    
@endsection
@section('content')
  <style> 
    @media (min-width: 768px) {

      /* show 3 items */
      .cinner .active,
      .cinner .active + .crsitem,
      .cinner .active + .crsitem + .crsitem,
      .cinner .active + .crsitem + .crsitem + .crsitem  {
          display: block;
      }
      
      .cinner .crsitem.active:not(.crsitem-right):not(.crsitem-left),
      .cinner .crsitem.active:not(.crsitem-right):not(.crsitem-left) + .crsitem,
      .cinner .crsitem.active:not(.crsitem-right):not(.crsitem-left) + .crsitem + .crsitem,
      .cinner .crsitem.active:not(.crsitem-right):not(.crsitem-left) + .crsitem + .crsitem + .crsitem {
          transition: none;
      }
      
      .cinner .crsitem-next,
      .cinner .crsitem-prev {
        position: relative;
        transform: translate3d(0, 0, 0);
      }
      
      .cinner .active.crsitem + .crsitem + .crsitem + .crsitem + .crsitem {
          position: absolute;
          top: 0;
          right: -25%;
          z-index: -1;
          display: block;
          visibility: visible;
      }
      
      /* left or forward direction */
      .active.crsitem-left + .crsitem-next.crsitem-left,
      .crsitem-next.crsitem-left + .crsitem,
      .crsitem-next.crsitem-left + .crsitem + .crsitem,
      .crsitem-next.crsitem-left + .crsitem + .crsitem + .crsitem,
      .crsitem-next.crsitem-left + .crsitem + .crsitem + .crsitem + .crsitem {
          position: relative;
          transform: translate3d(-100%, 0, 0);
          visibility: visible;
      }
      
      /* farthest right hidden item must be abso position for animations */
      .cinner .crsitem-prev.crsitem-right {
          position: absolute;
          top: 0;
          left: 0;
          z-index: -1;
          display: block;
          visibility: visible;
      }
      
      /* right or prev direction */
      .active.crsitem-right + .crsitem-prev.crsitem-right,
      .crsitem-prev.crsitem-right + .crsitem,
      .crsitem-prev.crsitem-right + .crsitem + .crsitem,
      .crsitem-prev.crsitem-right + .crsitem + .crsitem + .crsitem,
      .crsitem-prev.crsitem-right + .crsitem + .crsitem + .crsitem + .crsitem {
          position: relative;
          transform: translate3d(100%, 0, 0);
          visibility: visible;
          display: block;
          visibility: visible;
      }
      
      }
      }
</style> 
<section class="banner" id="banner">
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <img src="/assets/images/banner/banner.jpeg" class="d-block w-100" alt="gambar">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="/assets/images/banner/banner1.jpeg" class="d-block w-100" alt="gambar">
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
<div class="container-fluid text-center peta" style="min-height:280px; background-image:url('/assets/images/bg/peta.png');">
    <div class="row">
        <div class="col-md mb-3 mt-3">
            <h2 style="color:#42F0CD" class="wow bounce slow"> <b>Our Vision</b></h2>
        </div>
    </div>
    <div class="row text-justify text-center">
        
        <div class="col-md-12 wow bounce fast mt-4">
          <p class="isi-visi">"Menjadi Perusahaan management sumber daya manusia terkemuka di Indonesia"
            </p>
        </div>
        
    </div>
</div>
</section>
<section class="mission">
  <div class="container-fluid"> 
<div class="row bg-light text-center py-3">
  <div class="col-md-12">
    <h2 style="color:#42F0CD" class="wow bounce slow"><i class="fas fa-crooshair"></i> <b>Our Mission</b></h2>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="box-part text-center">
          <i class="fas fa-hands-helping fa-6x icon-misi wow bounce slow" aria-hidden="true"></i>          
          <div class="text">
              <span class="misi-text wow bounce fast">Membantu Calon Tenaga Kerja mendapatkan   
                pekerjaan</span>
          </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="box-part text-center">
          <i class="fas fa-people-carry fa-6x icon-misi wow bounce slow" aria-hidden="true"></i>          
          <div class="text">
              <span class="misi-text wow bounce fast" aria-hidden="true">Memberikan service yang lebih baik kepada Client</span>
          </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="box-part text-center">
          <i class="fas fa-users-cog fa-6x icon-misi wow bounce slow" aria-hidden="true" aria-hidden="true"></i>          
          <div class="text">
              <span class="misi-text wow bounce fast" aria-hidden="true">Menyediakan tenaga kerja yang kompeten</span>
          </div>
    </div>
  </div>


</div>  
</div>
</section>
  
<section id="galeri" class="galeri">
    <div class="container">
      <div class="row text-center mt-3 py-3">
        <div class="col-md-12">
          <h2 style="color:#42F0CD" class="wow bounce slow"><b>Galeri</b></h2>
        </div>
          <div class="col-md-12">
            <div id="myBtnContainer" class="myImg text-center">
              <button class="btn tmbl activex" onclick="filterSelection('all')"> Show all</button>
              <button class="btn tmbl" onclick="filterSelection('pk')"> Pegawai Kami</button>
              <button class="btn tmbl" onclick="filterSelection('psikotes')"> Psikotes</button>
              <button class="btn tmbl" onclick="filterSelection('training')"> Training</button>  
            </div> 
          </div>
        <div class="row-galery">
          <div class="column pk">
            <div class="content">
              <div class="pop" >
              <img id="gambar" src="/assets/images/galeri/pegawai.jpg" alt="pegawai" style="width:100%"> </div>
            </div>
          </div>
		      <div class="column pk">
            <div class="content">
              <div class="pop">
               <img id="gambar" src="/assets/images/galeri/pegawai1.jpg" alt="pegawai" style="width:100%">	    
              </div>
            </div>
          </div>
           <div class="column pk">
            <div class="content">
              <div class="pop">	     
                <img id="gambar" src="/assets/images/galeri/pegawai2.jpeg" alt="pegawai" style="width:100%">
               </div>
            </div>
          </div>
          <div class="column pk">
            <div class="content">
              <div class="pop">
              <img id="gambar" src="/assets/images/galeri/pegawai3.jpeg" alt="pegawai" style="width:100%">
              </div>
            </div>
	        </div>
          <div class="column psikotes">
            <div class="content">
              <div class="pop">
              <img id="gambar" src="/assets/images/galeri/psikotes.jpg" alt="Psikotes" style="width:100%">
            </div>
           </div>
          </div>
          <div class="column psikotes">
              <div class="content">
                <div class="pop">
                  <img id="gambar" src="/assets/images/galeri/psikotes1.jpg" alt="Psikotes" style="width:100%">
                </div>
              </div>
          </div>
          <div class="column training">
              <div class="content">
                <div class="pop">
                <img id="gambar" src="/assets/images/galeri/training1.jpeg" alt="training" style="width:100%">
              </div>
              </div>
            </div>
            <div class="column training">
              <div class="content"><div class="pop">
                <img id="gambar" src="/assets/images/galeri/training2.jpg" alt="training" style="width:100%">
              </div></div>
          </div>
          <div class="column training">
            <div class="content">
              <div class="pop">
              <img id="gambar" src="/assets/images/galeri/training3.jpg" alt="training" style="width:100%">
            </div>
            </div>
          </div>
        {{-- <!-- END GRID --> --}}
        </div>
    </div>
  </div>
</div>
</section>
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">              
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
    </div>
  </div>
</div>

<section id="visitor">
    <div class="container-fluid parallax text-center" style="min-height:280px; background-image:url('/assets/images/bg/bg.jpg');">
        <div class="row">
            <div class="col-md mb-3 mt-3">
                <h2 class="wow bounce slow" style="color:#42F0CD"><b>Visitor</b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="employees">
                    <p class="counter-count text-light">99088</p>
                    <p class="employee-p text-light wow bounce slow" ><b>Pengunjung</b></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="klien">
  <div class="container-fluid bg-light text-center py-3" style="min-height:280px;">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="wow bounce fast"  style="color:#42F0CD"><b>Klien</b></h2>
        <div id="carouselExample" class="carousel crslide slide" data-ride="carousel" data-interval="9000">
          <div class="carousel-inner cinner row w-50 mx-auto" role="listbox">
            <div class="carousel-item crsitem col-md-3 active">
              <img class="img-fluid mx-auto d-block" src="{{url('/assets/images/klien/logo_yamaha.png')}}" alt="slide 1">
            </div>
            @foreach ($klien as $k)
              <div class="carousel-item crsitem col-md-3">
                <img class="img-fluid mx-auto d-block" src="{{url('/assets/images/klien',$k->logo)}}" alt="slide 1">
            </div>  
            @endforeach
          </div>
              <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                  <i class="fa fa-chevron-left fa-lg text-muted"></i>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                  <i class="fa fa-chevron-right fa-lg text-muted"></i>
                  <span class="sr-only">Next</span>
              </a>
        </div>
    </div>
</div>
<div class="d-flex flex-row-reverse text-light">
  <div class="p-2">
      <a href="/client" class="btn bg-success text-light btn-sm"> Lihat Selengkapnya</a>
  </div>

</div>
</section>

<section id="service" class="service">
  
    <div class="container-fluid py-3 parallax" style="min-height:280px; background-image:url('/assets/images/bg/bg-servis.jpg');"> 
      <div class="row text-center my-3 py-3">
        <div class="col-md-12">
          <h2 style="color:#42F0CD" class="wow bounce fast"><i class="fas fa-crooshair"></i> <b>Our Services</b></h2>
        </div>
      </div>
      <div class="row py-3">
        <div class="col-md-6 img-service2">
        </div>
        <div class="col-md-6 text-center mt-3">          
          <h4 class="card-title title-service  wow bounce fast"> Kontraktor Tenaga Kerja</h4>
          <p class="card-text isi-service">Kami menawarkan kerjasama dalam pemborongan pekerjaan di perusahaan Bapak.</p>
        </div>
      </div>

      <div class="row py-3">
        <div class="col-md-6 text-center mt-3">          
          <h4 class="card-title title-service wow bounce fast">Psikotes</h4>
                <p class="card-text isi-service">kami memiliki Standard Internasional karena diciptakan oleh anak bangsa dengan study banding di Canada</p>
        </div>
        <div class="col-md-6 img-service3">
        </div>
      </div>

      <div class="row py-3">
        <div class="col-md-6 img-service4">
        </div>
        <div class="col-md-6 text-center mt-3">          
          
          <h4 class="card-title title-service wow bounce fast"> Motivation Training</h4>
          <p class="card-text isi-service">Motivasi Kerja yang menghasil kan Good Skill, melalui training diharapkan peserta memahami, mengalami dan berlatih</p>

        </div>
      </div>

    </div>
        
</section>

<script>
  
  filterSelection("all") // Execute the function and show all columns
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }
  
  // Show filtered elements
  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {
        element.className += " " + arr2[i];
      }
    }
  }
  
  // Hide elements that are not selected
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
  var btns = btnContainer.getElementsByClassName("tmbl");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("activex");
      current[0].className = current[0].className.replace(" activex", "");
      this.className += " activex";
    });
  }

</script>
@endsection