@extends('beranda')
@section('title')
Indopsiko- Dashboard    
@endsection

@section('content')
<div class="container-fluid mt-5 pt-5">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Beranda</a></li>
      <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
    </ol>
  </nav>
</div>

<div class="container-fluid mt-3 mb-3 bg-white">
    <div class="row text-center py-3">
        <div class="col-md">
            <h2 class="wow bounce fast judul-profil" style="color:#42F0CD"><b>Hubungi Kami</b></h2>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-md-12 col-md-offset-3">
            <div class="well well-sm">
              <form class="form-horizontal" action="" method="post">
              <fieldset>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="name">Name</label>
                  <div class="col-md-9">
                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="email">Your E-mail</label>
                  <div class="col-md-9">
                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="message">Your message</label>
                  <div class="col-md-9">
                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                  </div>
                </div>
        
                <div class="form-group">
                  <div class="col-md-12">
                    <button type="submit" class="btn  bg-success btn-lg">Submit</button>
                  </div>
                </div>
              </fieldset>
              </form>
            </div>
          </div>
    </div>
    <div class="row text-center py-3">
        <div class="col-md">
            <h2 class="wow bounce fast judul-profil" style="color:#42F0CD"><b>Alamat Kami</b></h2>
        </div>
    </div>
    <div class="row text-justify py-3">
        <div class="col-md-12">
            <div class="card">
                <div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2868346309697!2d106.89668561423076!3d-6.2258610954932045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f34706d82fbf%3A0x147f4719639399a8!2sPT.%20INDOPSIKO%20INDONESIA!5e0!3m2!1sid!2sid!4v1581921860640!5m2!1sid!2sid" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div><style>.mapouter{position:relative;text-align:right;}.gmap_canvas {overflow:hidden;background:none!important;}</style></div>
                <div class="card-body">
                  <h5 class="card-title wow bounce" data-wow-duration="1s" animation-duration="0.25s">Kantor Pusat</h5>
                  <p class="card-text">Jl. Raya Pahlawan Revolusi No. 59
                    Pondok Bambu Kec. Duren Sawit
                    Kota Jakarta Timur - DKI Jakarta (13430)
                    </p>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>

@endsection