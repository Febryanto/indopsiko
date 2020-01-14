@extends('beranda')
@section('homecontent')
@if (session('status'))
<div class="alert alert-primary fade show" role="alert">
    <div class="alert-text">{{ session('status') }}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="la la-close"></i></span>
        </button>
    </div>
</div>
@endif
@if(Session::has('fail'))
<div class="alert alert-danger fade show" role="alert">
    <div class="alert-text">{{Session::get('fail')}}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="la la-close"></i></span>
        </button>
    </div>
</div>
@endif

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Bergabunglah bersama kami
        </div>
    </div>
    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Detail Lowongan
                </h3>
            </div>

        @foreach ($data as $i)
            <div class="kt-portlet__head-toolbar">
                <a href="" class="btn btn-danger btn-md  btn-bold" data-toggle="modal" data-target="#tambah">
                    Lamar
                </a>
                    {{--  <!-- Modal -->  --}}
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="tambahLabel">Apply CV Anda</h5>

                    </div>

                    <form action="{{ route('apply.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                                      {{ @csrf_field() }}
                                      <div class="form-group">
                                          <input type="hidden" name="id_lowongan" value="{{$i->id_lowongan}}">
                                      </div>
                                      <div class="form-group">
                                              <label for="nama lengkap">Nama Lengkap</label>
                                              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" name="nik" class="form-control" placeholder="NIK" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_kk">No KK</label>
                                        <input type="text" name="no_kk" class="form-control" placeholder="No KK" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="npwp">NPWP</label>
                                        <input type="text" name="npwp" class="form-control" placeholder="NPWP" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Pendidikan">Pendidikan</label>
                                        <select class="form-control" name="pendidikan" required>
                                            <option>Pilih Pendidikan</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No Handphone</label>
                                        <input type="text" name="no_hp" class="form-control" placeholder="No Handphone" value="" required>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                        <label for="Alamat">Alamat</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <textarea name="alamat" cols="57" rows="10"></textarea>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="cv">CV</label>
                                        <input type="file" name="cv" class="form-control" placeholder="CV" value="" required>
                                    </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div class="kt-widget13">
                <div class="kt-widget13__item">
                    <span class="kt-widget13__desc">
                        Nama Perusahaan
                    </span>
                    <span class="kt-widget13__text kt-widget13__text--bold">
                        {{$i->nama_perusahaan}}
                    </span>
                </div>
                <div class="kt-widget13__item">
                    <span class="kt-widget13__desc kt-align-right">
                        Jabatan:
                    </span>
                    <span class="kt-widget13__text kt-widget13__text--bold">
                        {{$i->jabatan}}
                    </span>
                </div>
                <div class="kt-widget13__item">
                    <span class="kt-widget13__desc">
                        Keterangan:
                    </span>
                    <span class="kt-widget13__text">
                       {!! $i->deskripsi !!}
                    </span>
                </div>
                <div class="kt-widget13__item">
                    <span class="kt-widget13__desc">
                        Status Lowongan:
                    </span>
                    <span class="kt-widget13__text kt-widget13__text--bold">
                        @if ($i->status == 1)
                            Dibuka
                        @else
                            Ditutup
                        @endif
                    </span>
                </div>
                <div class="kt-widget13__item">
                    <span class="kt-widget13__desc">
                        Email:
                    </span>
                    <span class="kt-widget13__text">
                        {{$i->email}}
                    </span>
                </div>
                <div class="kt-widget13__item">
                    <span class="kt-widget13__desc">
                        Telp:
                    </span>
                    <span class="kt-widget13__text  kt-font-brand kt-widget13__text--bold">
                        {{$i->telp}}
                     </span>
                 </div>
             </div>
        </div>
    </div>
@endforeach
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    $(document).ready(function(){

      CKEDITOR.replace('editor1', {
        height: 260,
        width: 700,
      });
    });
    </script>
    <script src="/assets/ckeditor/ckeditor.js"></script>
@endsection
