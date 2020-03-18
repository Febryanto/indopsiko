@extends('admin.index')
@section('title')
    Berita
@endsection
@section('subheader')
    Halaman Admin
@endsection
@section('aktif_berita')
kt-menu__item--open kt-menu__item--here
@endsection
@section('content')
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <div class="kt-portlet">
            <div class="kt-portlet__head">

                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
					    Edit Berita
					</h3>
                </div>
            </div>
            <div class="kt-form kt-form--label-right">
                <div class="kt-portlet">
                    @foreach ($data as $u)
                    <form method="post" action="{{ route('berita.update',$u->id_berita) }}"  enctype="multipart/form-data">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <div class="kt-portlet__body">
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Foto </label>
                            <div class="col-lg-9 col-xl-6">
                                <img class="kt-avatar__holder" src="/assets/images/berita/{{$u->foto}}" id="showgambar" style="height:300px;" alt="">
                                <input type="file" id="inputgambar" name="gambar" value="{{$u->foto}}" class="validate"/ >
                            </div>
                        </div>     <div class="form-group">
                            <label for="judul">judul</label>
                            <input type="text" name="judul" class="form-control" placeholder="judul" value="{{$u->judul}}">
                    </div>
                    <div class="form-group">
                            <label for="subjudul">subjudul</label>
                            <input type="text" name="subjudul" class="form-control" placeholder="subjudul" value="{{$u->subjudul}}">
                    </div>
                    <div class="form-group">
                        <label for="isi">isi</label>
                        <textarea id="editor1" name="isi" id="" cols="70" rows="7">{{ $u->isi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="Status">Status Berita</label>
                    <select class="form-control" name="status">
                        <option value="1" @if ($u->status == 1 )
                            selected>
                            Aktif
                        </option>
                        <option value="0">Nonaktif</option>
                        @else
                        <option value="0" selected>Nonaktif</option>
                        <option value="1">Aktif</option>
                        
                        @endif
                    </select>
                </div>
                      <div class="kt-portlet__foot">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('berita.index') }}" class=" btn btn-danger">Batal</a>
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
{{--  <script src="/assets/js/materialize.min.js}}"></script>  --}}
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
<script>
    $(document).ready(function(){
        CKEDITOR.replace('editor1', {
            height: 260,
            width: 900,
          });
    });
</script>
@endsection
