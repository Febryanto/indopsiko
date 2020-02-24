@extends('beranda')
@section('title')
Indopsiko- Dashboard    
@endsection

@section('content')
<div class="container-fluid mt-5 pt-5">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Beranda</a></li>
      <li class="breadcrumb-item active" aria-current="page">Profil</li>
    </ol>
  </nav>
</div>
<div class="container-fluid mt-3 mb-3">
    <div class="row">
        <div class="col-md">
            <div class="card text-center">
                <img class="card-img-top profil-banner" src="/assets/images/banner/XXXbanner.jpeg" alt="Card image cap">
                <div class="card-body py-3">
                  <h2 class="judul-profil wow bounce fast" >Profil</h2>
                    <p class="card-text wow bounce slow"  > Pada tanggal 04 Maret 1994, Gunarto Gunotalijendro, SH, MM, mendirikan sebuah perusahaan yang bergerak dalam bidang Pengelolan dan Pemberdayaan Sumber Daya Manusia yakni PT. INDOPSIKO INDONESIA .
                      Dalam perjalanan waktu IPI menjadi perusahaan yang handal dengan staff-staff ahli di bidangnya dan management yang mendukung dan menerapkan system management mutu 
                    </p>
                    <h2 class="judul-profil wow bounce fast" >Visi</h2>
                    <p class="card-text wow bounce slow"  > Menjadi Perusahaan management sumber daya manusia terkemuka di Indonesia</p>
                    <h2 class="judul-profil wow bounce fast" >Misi</h2>
                    <p class="card-text">
                    <ul class="misi-profil wow bounce slow"  >
                    <li class="list-profil">Membantu Calon Tenaga Kerja mendapatkan   
                        pekerjaan</li>
                    <li class="list-profil">Memberikan service yang lebih baik kepada Client</li>
                    <li class="list-profil">Menyediakan tenaga kerja yang kompeten</li>    
                    </ul></p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection