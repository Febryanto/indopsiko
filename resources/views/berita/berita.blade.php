@extends('beranda')
@section('content')
<div class="container-fluid bg-light">
    <div class="row pt-5">
        <div class="alert text-dark" role="alert" style="background-color:#42F0CD;">
            Berita Terkini
          </div>
    </div>
   

    @forelse($data as $i)

    <div class="row py-5">
        <div class="col">
            <form action="" id="formnews">
            <div class="card text-justify ">
                <div class="card-header">
                   {{$i->judul}}
                </div>
                 <div class="card-body">
                      <h5 class="card-title">{{$i->subjudul}}</h5>
                      <p class="BeritaBody">
                        {{  \Illuminate\Support\Str::limit(strip_tags($i->isi),50) }}
                        @if (strlen(strip_tags($i->isi)) > 50)
                          <br><a href="{{ route('dtlBerita',$i->id_berita) }}" id="readmore" class="btn btn-info btn-sm bg-success" role="button">Read More</a>
                        @endif
                    </p>
                </div>
                        <div class="card-footer text-muted">
                        {{$i->created_at->format('Y.m.d') }}
                        </div>
            </div>     
        </div>
        
    </div>
    
    <nav aria-label="Page navigation example">
        <ul class="pagination">
    {{ $data->links() }}</div>
        </ul>
    </nav>
    @empty
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Berita Kosong!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <br>
      <div class="clearfix"></div>
    @endforelse
</div>

{{--  <section class="berita" id="berita">
        <div class="jumbotron text-center">
    <h1>beritaacara</h1>
</div>
    <br/>
    <div class="card" style="max-width: auto;">
    <div class="row no-gutters">
		<div class="col-md-4">
			<img src="/assets/images/banner/banner.jpeg" class="card-img" alt="...">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">kecelakaan kerja</h5>
                <p class="card-text"><small class="text-muted">Diposting 19 menit lalu</small></p>
                <a href="#" class="btn btn-warning btn-md bg-dark">selangkangan</a>
            </div>
            </div>
		</div>
	</div>
</div>
<br>
<div class="card" style="max-width: auto;">
    <div class="row no-gutters">
		<div class="col-md-4">
			<img src="/assets/images/banner/banner.jpeg" class="card-img" alt="...">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">kecelakaan kerja</h5>
                <p class="card-text"><small class="text-muted">Diposting 19 menit lalu</small></p>
                <a href="#" class="btn btn-warning btn-md bg-dark">selangkangan</a>
            </div>
            </div>
		</div>
	</div>
</div>
<br>
<div class="card" style="max-width: auto;">
    <div class="row no-gutters">
		<div class="col-md-4">
			<img src="/assets/images/banner/banner.jpeg" class="card-img" alt="...">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">kecelakaan kerja</h5>
                <p class="card-text"><small class="text-muted">Diposting 19 menit lalu</small></p>
                <a href="#" class="btn btn-warning btn-md bg-dark">selangkangan</a>
            </div>
            </div>
		</div>
	</div>
</div>
<br>
<div class="card" style="max-width: auto;">
    <div class="row no-gutters">
		<div class="col-md-4">
			<img src="/assets/images/banner/banner.jpeg" class="card-img" alt="...">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">kecelakaan kerja</h5>
                <p class="card-text"><small class="text-muted">Diposting 19 menit lalu</small></p>
                <a href="#" class="btn btn-warning btn-md bg-dark">selangkangan</a>
            </div>
            </div>
		</div>
	</div>
</div>
</section>  --}}
@endsection
