@extends('admin.index')
@section('title')
    Profil
@endsection
@section('subheader')
    Halaman Admin
@endsection
@section('aktif_profil')
kt-menu__item--open kt-menu__item--here
@endsection
@section('content')
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <div class="kt-portlet">
            <div class="kt-portlet__head">

                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
					    Edit Profil Perusahaan
					</h3>
                </div>
            </div>
            <div class="kt-form kt-form--label-right">
                <div class="kt-portlet">
                    @foreach ($data as $u)
                    <form method="post" action="{{ route('proper.update',$u->id_profil) }}"  enctype="multipart/form-data">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <div class="kt-portlet__body">
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Logo </label>
                            <div class="col-lg-9 col-xl-6">
                                <img class="kt-avatar__holder" src="/assets/images/logos/{{$u->logo}}" id="showgambar" style="height:300px;" alt="">
                                <input type="file" id="inputgambar" name="gambar" value="{{$u->logo}}" class="validate"/ >
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="Nama">Nama Perusahaan</label>
                          <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" value="{{$u->nama_perusahaan}}">
                        </div>
                        <div class="form-group">
                            <label for="Motto">Motto</label>
                            <input type="text" name="motto" class="form-control" placeholder="Motto" value="{{$u->motto}}">
                          </div>
                        <div class="form-group">
                            <label for="Website">Website</label>
                            <input type="text" name="website" class="form-control" placeholder="Website" value="{{$u->website}}">
                          </div>
                          <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{$u->email}}">
                          </div>
                          <div class="form-group row">
                            <div class="col-lg-2">
                            <label for="Alamat">Alamat</label>
                            </div>
                            <div class="col-lg-10">
                                <textarea name="alamat"  cols="100" rows="10">{{$u->alamat}}</textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="Telephone">Telephone</label>
                            <input type="text" name="telp" class="form-control" placeholder="No. Telphone" value="{{$u->telp}}">
                          </div>
                      <div class="kt-portlet__foot">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('proper.index') }}" class=" btn btn-danger">Batal</a>
                      </div>
                    </form>
                    @endforeach
                  </div>
            </div>

        </div>
        {{--  <!--End:: Portlet-->  --}}
    </div>
    </div>
</div>
</div>
<script src="/assets/js/materialize.min.js}}"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">

    function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#showgambar').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
  }

  $("#inputgambar").change(function () {
      readURL(this);
  });

</script>

@endsection
