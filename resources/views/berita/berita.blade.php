@extends('beranda')
@section('title')
Indopsiko- Dashboard    
@endsection
@section('content')
<div class="container-fluid mt-5 pt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Berita</li>
        </ol>
      </nav>
    </div>
    
    <div class="container-fluid mt-3 mb-3 bg-white">
        <div class="row text-center pt-3">
            <div class="col-md">
                <h2 class="wow bounce fast judul-profil" style="color:#42F0CD"><b>Last Updates</b></h2>
            </div> 
        </div>
        <div class="d-flex flex-row-reverse bg-light">
            <div class="p-2">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" id="generalSearch" class="form-control" placeholder="Cari Berita" aria-label="GeneralSearch" aria-describedby="basic-addon1">
                  </div>
            </div>
        </div>
        <div class="row">
            @forelse ($data as $i)
            <div class="col-md py-3">
                <div id="myCard">
                <div class="card profil-banner wow bounce fast" style="width:400px">
                    <img class="card-img-top" src="{{url('assets/images/berita/'. $i->foto)}}" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">{{ $i->judul }}</h4>
                      <p class="card-text">{{  \Illuminate\Support\Str::limit(strip_tags($i->isi),50) }}
                        @if (strlen(strip_tags($i->isi)) > 50)
                          <br><a href="{{ route('dtlBerita',$i->id_berita) }}" id="readmore" class="btn btn-info btn-sm bg-success" role="button">Read More</a>
                        @endif</p>
                        
                    <p class="card-text"><small class="text-muted">{{$i->created_at->format('Y.m.d') }}</small></p>  
                    </div>
                  </div>
                </div>
            </div>
            @empty

          <div class="col-md-3 py-3">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Berita Kosong!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <br>
              <div class="clearfix"></div>
            </div>
            @endforelse
            
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    $(document).ready(function(){
      $("#generalSearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myCard .card").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

@endsection
