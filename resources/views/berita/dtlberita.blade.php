@extends('beranda')
@section('content')

<section class="detail" id="detail">
    <div class="container-fluid bg-light py-2">
        <div class="row pt-5">
            <div class="alert text-dark" role="alert" style="background-color:#0eb493;">
                Berita Terkini
              </div>
        </div>
       
    
        @foreach($data as $i)
    
        <div class="row">
            <div class="col">
                <div class="card text-justify ">
                    <div class="card-header">
                       {{$i->judul}}
                    </div>
                     <div class="card-body">
                          <h5 class="card-title">{{$i->subjudul}}</h5>
                            <p class="card-text">{!!$i->isi!!}</p>
                    </div>
                            <div class="card-footer text-muted">
                            {{$i->created_at->format('Y.m.d') }}
                            </div>
                </div>     
            </div>
        </div>
        @endforeach
        
    <a href="{{ route('getBerita') }}" class=" btn bg-danger btn-danger">Kembali</a>
    </div>
</section>

@endsection