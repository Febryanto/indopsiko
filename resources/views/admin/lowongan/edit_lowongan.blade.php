@extends('admin.index')
@section('title')
    Lowongan
@endsection
@section('subheader')
    Halaman Admin
@endsection
@section('aktif_lowongan')
kt-menu__item--open kt-menu__item--here
@endsection
@section('content')
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <div class="kt-portlet">
            <div class="kt-portlet__head">

                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
					    Edit Lowongan
					</h3>
                </div>
            </div>
            <div class="kt-form kt-form--label-right">
                <div class="kt-portlet">
                    @foreach ($data as $u)
                    <form method="post" action="{{ route('lowongan.update',$u->id_lowongan) }}"  enctype="multipart/form-data">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <div class="kt-portlet__body">
                        <div class="form-group">
                            <label for="nama_perusahaan">Nama Perusahaan</label>
                            <select name="id_klien" id="id_klien" class="form-control input-lg dynamic">
                                <option value="">Select Perusahaan</option>
                                @foreach ($klien as $item)
                                    <option value="{{$item->id_klien}}"
                                        @if ($item->id_klien === $u->id_klien)
                                            selected>
                                            {{$item->nama_perusahaan}}
                                    </option>
                                        @else
                                        <option value="{{$item->id_klien}}">{{$item->nama_perusahaan}}</option>
                                        @endif>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">jabatan</label>
                            <input type="text" name="jabatan" class="form-control" placeholder="jabatan" value="{{$u->jabatan}}">
                    </div>
                        <div class="form-group row">
                          <div class="col-lg-2">
                          <label for="Alamat">Deskripsi</label>
                          </div>
                          <div class="col-lg-10">
                              <textarea name="deskripsi" id="editor1" cols="100" rows="10">{{$u->deskripsi}}</textarea>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="Status">Status Lowongan</label>
                            <select class="form-control" name="status">
                                <option>Pilih status</option>
                                <option value="1" @if ($u->status === 1 )
                                    selected>
                                    Dibuka
                                </option>
                                <option value="0">Ditutup</option>
                                @else
                                <option value="0" selected>Ditutup</option>
                                <option value="1" selected>Dibuka</option>
                                @endif
                            </select>
                        </div>
                      <div class="kt-portlet__foot">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('lowongan.index') }}" class=" btn btn-danger">Batal</a>
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
<script>
    $(document).ready(function(){

      CKEDITOR.replace('editor1', {
        height: 260,
        width: 700,
      });
    });
    </script>
@endsection

