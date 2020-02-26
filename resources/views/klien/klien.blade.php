@extends('beranda')
@section('title')
Indopsiko- Dashboard    
@endsection

@section('content')
<div class="container-fluid mt-5 pt-5">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Beranda</a></li>
      <li class="breadcrumb-item active" aria-current="page">Klien</li>
    </ol>
  </nav>
</div>
<div class="container-fluid mt-3 mb-3 bg-white">
    <div class="row text-center pt-3">
        <div class="col-md">
            <h2 class="wow bounce fast judul-profil" style="color:#42F0CD"><b>Our Client</b></h2>
        </div>
    </div>
    <div class="d-flex flex-row-reverse bg-light">
        <div class="p-2">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                </div>
                <input type="text" id="generalSearch" class="form-control" placeholder="Cari Perusahaan" aria-label="GeneralSearch" aria-describedby="basic-addon1">
              </div>
        </div>
      </div>
    <div class="row">
        @foreach ($data as $i)
        <div class="col-sm-4 py-4 text-center">
            <div id="myCorp">
                <div class="OneCorp card-columns-fluid wow bounce fast">
                <div class="card  bg-light">
                    <img class="card-img-top logo-klien"  src="{{url('assets/images/klien/'. $i->logo)}}" alt="Card image cap">

                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $i->nama_perusahaan }}</b></h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    $(document).ready(function(){
      $("#generalSearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myCorp .OneCorp").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

@endsection

{{-- 

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Halaman ini menampilkan data klien
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Data klien
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="uk-child-width-1-4@m uk-grid uk-grid-stack">
            @foreach ($data as $i)
            <div class="uk-animation-toggle uk-first-column" tabindex="0">
                <div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom">
                    <div class="uk-card-media-top">
                        <img src="{{url('assets/images/klien/'. $i->logo)}}" style=" height:150px;" alt="Logo Klien">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">{{$i->nama_perusahaan}}</h3>
                        <p>{{$i->website}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
        <div class="kt-portlet__foot">
            <div class="row align-items-center">
                <div class="col-lg-6 m--valign-middle">
                    <div class="kt-datatable__pager kt-datatable--paging-loaded">
                        {{ $data->links() }}</div>
                </div>
            </div>
        </div>
     </div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
      $("#generalSearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script> --}}
