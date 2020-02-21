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
            <h4 style="color:#0eb493" class="animated bounce" data-wow-duration="2s" data-wow-delay="5s"><b>Tentang Kami</b></h4>
        </div>
    </div>
    <div class="row text-justify">
        <div class="col-md-4 animated bounce slow">
            <h5><i class="fas fa-users" style="color:#0eb493;"></i> Profil</h5><p>Pembangunan manusia seutuhnya. Demikian kalimat sakral yang telah menjadi komitmen dasar bagi Bangsa dan Negara. Aplikasinya menjadi kewajiban bersama, baik pemerintah maupun rakyatnya. Arahnya adalah tercapainya kehidupan yang sejahtera, adil dan makmur, lahir maupun batin. Dalam kerangka itu orang beraktifitas menurut bidang dan keahlian masing-masing, dan satu aktifitas yang menghasilkan produk unggul pasti dikerjakan oleh tangan-tangan yang ahli dan profesional.
            </p>
        </div>
        <div class="col-md-4 animated bounce fast">
            <h5><i class="fas fa-award" style="color:#0eb493;"></i> Visi</h5><p>Menjadi Perusahaan Nomor 1 di Indonesia
            </p>
        </div>
        <div class="col-md-4 animated bounce faster">
            <h5><i class="fas fa-crosshairs" style="color:#0eb493;"></i> Misi</h5><p>Membantu Calon Tenaga Kerja mendapatkan   
              pekerjaan
           
           Memberikan service yang lebih baik kepada Clien
           
           Menyediakan tenaga kerja yang kompeten
           </p>
        </div>
    </div>
</div>
</section>

<section id="galeri" class="galeri">
    <div class="container-fluid">
        
      <div class="row text-center">
        <div class="col">
          <h4 style="color:#0eb493" class="animated bounce" data-wow-duration="2s" data-wow-delay="5s"><b>Galeri</b></h4>
        </div>
      </div>
        <div class="row text-center">
          <div class="col">
            <div id="myBtnContainer" class="myImg">
              <button class="btn tmbl activex" onclick="filterSelection('all')"> Show all</button>
              <button class="btn tmbl" onclick="filterSelection('pk')"> Pegawai Kami</button>
              <button class="btn tmbl" onclick="filterSelection('psikotes')"> Psikotes</button>
              <button class="btn tmbl" onclick="filterSelection('training')"> Training</button>  
            </div> 
          </div>
        </div>
        <div class="row">
          <div class="column pk">
            <div class="content">
              <img src="/assets/images/galeri/pegawai.jpeg" alt="pegawai" style="width:100%">
              <!-- The Modal -->
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>
            </div>
          </div>
          <div class="column training">
            <div class="content">
              <img src="/assets/images/galeri/training1.jpeg" alt="training" style="width:100%">
              <!-- The Modal -->
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>
            </div>
          </div>
          <div class="column psikotes">
            <div class="content">
              <img src="/assets/images/galeri/psikotes.jpg" alt="Psikotes" style="width:100%">
              <!-- The Modal -->
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>
            </div>
          </div>
          <div class="column training">
            <div class="content">
              <img src="/assets/images/galeri/training2.jpg" alt="training" style="width:100%">
              <!-- The Modal -->
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>
            </div>
          </div>
          <div class="column pk">
            <div class="content">
              <img src="/assets/images/galeri/pegawai1.jpg" alt="pegawai" style="width:100%">
              <!-- The Modal -->
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>
            </div>
          </div>
          <div class="column psikotes">
            <div class="content">
              <img src="/assets/images/galeri/psikotes1.jpg" alt="Psikotes" style="width:100%">
              <!-- The Modal -->
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>
            </div>
          </div>
          <div class="column pk">
            <div class="content">
              <img src="/assets/images/galeri/pegawai2.jpeg" alt="pegawai" style="width:100%">
              <!-- The Modal -->
              <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
              </div>
            </div>
          </div>
        {{-- <!-- END GRID --> --}}
        </div>
    </div>
    


<script>
  // Get the modal
  var modal = document.getElementById("myModal");
  
  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() { 
    modal.style.display = "none";
  }
  </script>
  

<section id="klien">
  <div class="container-fluid bg-white text-center py-3 my-3">
    <div class="row">
      <div class="col-sm-12">
    <h4 class="wow bounce" data-wow-duration="1s" animation-duration="0.25s" style="color:#0eb493"><b>Klien</b></h4>
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
</div></section>

<section id="visitor">
    <div class="container-fluid parallax text-center" style="min-height:280px; background-image:url('/assets/images/bg/bg.jpg');">
        <div class="row">
            <div class="col-md mb-3 mt-3">
                <h4 class="wow bounce" data-wow-duration="1s" animation-duration="0.25s" style="color:#0eb493"><b>Visitor</b></h4>
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
                <h4 class="wow bounce" data-wow-duration="1s" animation-duration="0.25s" style="color:#0eb493"><b>Service</b></h4>
            </div>
        </div>
            <div class="row py-2 ml-2 mr-2 text-justify">
                <div class="col-md wow bounce" data-wow-duration="0.5s" animation-duration="0.25s">
                    <h3><i class="fas fa-file-contract" style="color:#0eb493;"></i> Kontraktor Tenaga Kerja</h3><p>Sehubungan dengan Peraturan Menteri Tenaga Kerja Republik Indonesia NO.19 Tahun 2012 tentang SYARAT-SYARAT PENYERAHAN SEBAGIAN PELAKSANAAN PEKERJAAN KEPADA PIHAK LAIN dan Surat Edaran NO. SE-04/MEN/VIII/2013 tentang Pedoman Pelaksanannya, bersama ini kami PT. INDOPSIKO INDONESIA menawarkan kerjasama dalam PEMBORONGAN PEKERJAAN di perusahaan Bapak.
                      Karena berkembangnya pekerjaan perusahaan yang berakibat tidak memungkinkan masalah tenaga kerja ditangani oleh perusahaan sendiri, hal ini disebabkan oleh tuntutan globalisasi dan ketatnya persaingan sehingga perusahaan lebih berkonsentrasi kepada inovasi produk.</p>
                </div>
                <div class="col-md wow bounce" data-wow-duration="0.7s" animation-duration="0.25s">
                    <h3><i class="fas fa-chart-area" style="color:#0eb493;"></i> Psikotest</h3><p>Dalam menjalankan Psikotes Unjuk Kerja  Manageral PT. INDOPSIKO INDONESIA bekerjasama dengan GRAHITA INDONESIA suatu Lembaga Psikologi Terapan untuk melakukan Psikotes guna meningkatkan kwalitas Sumber Daya Manusia.
                      Psikotes kami memiliki Standard Internasional karena diciptakan oleh anak bangsa dengan study banding di Canada dan memiliki status Nasional karena telah mempunyai Hak Cipta yang di akui oleh Departemen Hukum dan Hak Asasi Manusia Repubik Indonesia tertanggal 4 Desember 2009.</p>
                </div>
                {{-- <div class="col-md wow bounce" data-wow-duration="0.8s" animation-duration="0.25s">
                    <h3><i class="fas fa-id-card" style="color:#0eb493;"></i> Recruitment</h3>
                    <p></p>
                </div> --}}
                <div class="col-md wow bounce" data-wow-duration="0.9s" animation-duration="0.25s"	>
                    <h3><i class="fas fa-recycle" style="color:#0eb493;"></i> Motivation Training</h3>
                    <p>Dengan adanya tuntutan globalisasi di era yang serba maju ini yang semuanya serba  cepat dan tepat di dalam persaingan yg semakin luas, sebagai manusia yang produktif pastilah mempunyai tantangan berat dalam menghadapi dunia modren. Untuk itu di perlukan Motivasi Kerja yang menghasil kan Good Skill, melalui training diharapkan peserta memahami, mengalami dan berlatih, sehingga Motivasi Kerja muncul secara reflek saat menghadapi permasalahan.
                      Peserta training akan  mendapatkan pengetahuan yang dapat memberikan kenyamanan dalam bekerja, sekaligus  akan menikmati hasil pekerjaanya.
                      Training Motivasi Kerja dikemas tidak sekedar teori tetapi juga disertai permainan ( game ) sehingga peserta  diharapkan berperan aktif</p>
                </div>
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