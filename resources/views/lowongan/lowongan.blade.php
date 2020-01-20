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
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Data Lowongan
                </h3>
            </div>
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
                                              <label for="nama lengkap">Nama Lengkap</label>
                                              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="tempat lahir">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="" required>
                                    </div><div class="form-group">
                                        <label for="tanggal lahir">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Pendidikan">Pendidikan</label>
                                        <select class="form-control" name="pendidikan" required>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                      <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" name="nik" class="form-control" placeholder="NIK" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="npwp">NPWP</label>
                                        <input type="text" name="npwp" class="form-control" placeholder="NPWP" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="sim">SIM</label>
                                        <input type="text" name="sim" class="form-control" placeholder="SIM" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin" required>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Pearusahaan">Perusahaan</label>
                                        <select class="form-control" name="id_perusahaan" required>
                                            @foreach ($klien as $u)
                                            <option value="{{$u->id_klien}}">{{$u->nama_perusahaan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Posisi">Posisi</label>
                                        <select class="form-control" name="posisi" required>
                                            <option value="Ob">Ob</option>
                                            <option value="Rider/kurir">Rider/kurir</option>
                                            <option value="Driver">Driver</option>
                                            <option value="Security">Security</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Sales">Sales</option>
                                            <option value="Receptionis">Receptionis</option>
                                            <option value="Operator produksi">Operator produksi</option>
                                            <option value="IT staff">IT staff</option>
                                            <option value="Helper / gudang">Helper / gudang</option>
                                            <option value="Teknisi">Teknisi</option>
                                            <option value="Leader">Leader</option>
                                            <option value="Custumor service">Costumor service</option>
                                            <option value="Manager">Manager</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No Handphone</label>
                                        <input type="text" name="no_hp" class="form-control" placeholder="No Handphone" value="" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama ibu kandung">Nama Ibu Kandung</label>
                                        <input type="text" name="nama_ibu_kandung" class="form-control" placeholder="Nama Ibu Kandung" value="" required>
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
            {{-- <!--begin: Search Form --> --}}
            <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="row align-items-center">
                            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-input-icon kt-input-icon--left">
                                    <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                        <span><i class="la la-search"></i></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <!--end: Search Form --> --}}
        </div>
        <div class="kt-portlet__body kt-portlet__body--fit">

                {{--  <!--begin: Datatable -->  --}}
                <table class="table  table-hover table-checkable" id="kt_table_1">
                {{-- <table class="kt-datatable" id="html_table" width="100%"> --}}
                    <thead>
                        <tr>
                            <th title="Field #2">Nama Perusahaan</th>
                            <th title="Field #3">Jabatan</th>
                            <th title="Field #3">Status Lowongan</th>
                            <th title="Field #4">Opsi</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($data as $i)
                            <tr>
                                <td>
                                    {{ $i->nama_perusahaan }}
                                </td>
                                <td>
                                    {{ $i->jabatan }}
                                </td>
                                <td>
                                    @if ($i->status == 1)
                                        Aktif
                                    @else
                                        Nonaktif
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('getLowonganbyid',$i->id_lowongan) }}" class="btn btn-sm btn-outline-warning btn-icon btn-icon-sm" title="Edit"><i class="fa fa-pen"></i></a>
                                </form></td>


                            </tr>

                        @endforeach

                    </tbody>
                </table>
                <div class="kt-datatable__pager kt-datatable--paging-loaded">
                    {{ $data->links() }}</div>
                {{--  <!--end: Datatable -->  --}}


            </div>
        </div>
    </div>
</div>

{{--  <!-- end:: Content -->  --}}
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
      CKEDITOR.replace('editor1', {
        height: 260,
        width: 450,
      });
    });
    </script>

@endsection
