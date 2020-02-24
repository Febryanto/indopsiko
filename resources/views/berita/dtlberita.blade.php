@extends('beranda')
@section('title')
Indopsiko- Dashboard    
@endsection
@section('content')
<div class="container-fluid mt-5 pt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Beranda</a></li>
          <li class="breadcrumb-item"><a href="/news">Berita</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
        </ol>
      </nav>
    </div>
    
    <div class="container-fluid mt-3 py-3 mb-3 bg-white">
        <div class="row text-center">
            <div class="col-md">
                <h2 class="wow bounce fast judul-profil" style="color:#42F0CD"><b>Detail Berita</b></h2>
            </div>
        </div>
        @foreach($data as $i)
    
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{url('assets/images/berita/'. $i->foto)}}" style="height: 400px; width: 100%; display: block;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $i->judul}}</h5>
                      <p class="card-text">{!! $i->isi !!}</p>
                      <p class="card-text"><small class="text-muted">{{$i->created_at}}</small></p>
                    </div>
                  </div>     
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <a href="{{ route('getBerita') }}" class=" btn bg-danger btn-danger">Kembali</a>
    
            </div>
        </div>
        @endforeach
    </div>
@endsection