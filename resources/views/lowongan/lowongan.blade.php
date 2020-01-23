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
                <a href="" class="btn btn-danger btn-lg btn-bold" id="blink" data-toggle="modal" data-target="#tambah">
                    <i class="fa fa-business-time"> Lamar</i>
                </a>
                    {{--  <!-- Modal -->  --}}
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="tambahLabel">Apply CV Anda</h5>

                    </div>
                    <form action="{{ route('apply.store') }}" name="apply" id="apply" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <style>
                            .error {
                                color:red;
                            }
                        </style>
                                      {{ @csrf_field() }}
                                      <div class="form-group">
                                              <label for="nama lengkap">Nama Lengkap</label>
                                              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                                      </div>
                                      <div class="form-group">
                                        <label for="tempat lahir">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                                    </div><div class="form-group">
                                        <label for="tanggal lahir">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
                                    </div>
                                    <div class="form-group">
                                            <label for="Pendidikan">Pendidikan</label>
                                        <select class="form-control" name="pendidikan">
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
                                        <input type="text" name="nik" class="form-control" placeholder="NIK">
                                    </div>
                                    <div class="form-group">
                                        <label for="npwp">NPWP</label>
                                        <input type="text" name="npwp" class="form-control" placeholder="NPWP">
                                    </div>
                                    <div class="form-group">
                                        <label for="sim">SIM</label>
                                        <input type="text" name="sim" class="form-control" placeholder="SIM">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin" required>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Posisi</label>
                                        <div class="col-9">
                                            <div class="kt-radio-list">
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi"> Office Boy
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Rider / Kurir"> Rider / Kurir
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Driver"> Driver
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Security"> Security
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Admin"> Admin
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Sales"> Sales
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Receptionist"> Receptionist
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Operator Produksi"> Operator Produksi
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="IT Staff"> IT Staff
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Helper / Gudang"> Helper / Gudang
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Teknisi"> Teknisi
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Customer Service"> Customer Service
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Leader"> Leader
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Manager"> Manager
                                                    <span></span>
                                                </label>
                                                <label class="kt-radio">
                                                    <input type="radio" name="posisi" value="Other"> Lainnya
                                                    <span></span>
                                                </label>
                                                <input type="text" id="other" name="posisi2" placeholder="Sebutkan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No Handphone</label>
                                        <input type="text" name="no_hp" class="form-control" placeholder="No Handphone">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama ibu kandung">Nama Ibu Kandung</label>
                                        <input type="text" name="nama_ibu_kandung" class="form-control" placeholder="Nama Ibu Kandung">
                                    </div>
                                      <div class="form-group">
                                        <label for="cv">CV</label>
                                        <input type="file" name="cv" class="form-control" placeholder="CV">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-3 col-form-label">Alamat Domisili</label>
                                    <div class="col-9">
                                        <textarea name="alamat" cols="70" rows="5"></textarea>
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
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<script>
    $(document).ready(function(){
      $("#generalSearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
      var posisi = $('input[name="posisi"]:checked').val();

      $("#other").hide();
      $("#apply input" ).change(function() {
        var val = $("input[name=posisi]:checked", "#apply").val();
         if (val == "Other") {
           $("#other").show();
         } else {
           $("#other").hide();
         }
       });

    });
    </script>

    <script>
        $(document).ready(function blink(){

                $('#blink').fadeOut(500).fadeIn(500, blink);



        });
    </script>
    <script type="text/javascript">
        $(function() {
            // Initialize form validation on the registration form.
            // It has the name attribute "registration"
            $("form[name='apply']").validate({
              // Specify validation rules
              rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                 nama: "required",
                 tempat_lahir: "required",
                 tanggal_lahir:"required",
                 pendidikan:"required",
                cv:{
                    required :true,
                    extension: "pdf",
                    filesize:2000
                },
                nik: {
                    required:true,
                    minlength:15,
                    maxlength:16,
                    number:true,
                },
                npwp: {
                    required:true,
                    minlength:12,
                    maxlength:14,
                    number:true,
                },
                sim: {
                    required:true,
                    minlength:12,
                    maxlength:14,
                    number:true,
                },
                jenis_kelamin:"required",
                posisi:"required",
                no_hp: {
                    required:true,
                    maxlength:13,
                    number:true,
                },
                email: {
                    required:true,
                    email:true,
                },
                nama_ibu_kandung: "required",
                alamat:"required",
              },
              // Specify validation error messages
              messages: {
                nama: "Masukan Nama",
                tempat_lahir: "Masukan Tempat Lahir",
                tanggal_lahir: "Masukan Tanggal Lahir",
                pendidikan : "Masukan Pendidikan",
                cv: {
                  required: "masukan cv",
                  extension: "file hanya boleh format pdf",
                  filesize: "ukuran file maksimum 2 MB"
                },
                nik: {required: "Masukan Nik",
                     maxlength: "Masukan Maksimal 16 digit angka",
                     minlength: "Masukan minimal 15 digit angka",
                     number: "Hanya Boleh Masukan Angka",
                },
                npwp: {required: "Masukan NPWP",
                     minlength: "Masukan Minimal 12 digit angka",
                     maxlength: "Masukan maksimal 14 digit angka",
                     number: "Hanya Boleh Masukan Angka",
                },
                sim: {required: "Masukan No SIM",
                     minlength: "Masukan Minimal 12 digit angka",
                     maxlength: "Masukan maksimal 14 digit angka",
                     number: "Hanya Boleh Masukan Angka",
                },
                jenis_kelamin: "Pilih Jenis Kelamin",
                posisi: "Pilih Posisi yang ingin dilamar",
                no_hp: {required: "Masukan No Handphone",
                     minlength: "Masukan Maksimal 13 digit angka",
                     number: "Hanya Boleh Masukan Angka",
                },
                email: {
                    required: "Masukan Email",
                    email: "email tidak valid",
                },
                nama_ibu_kandung: "Masukan Nama Ibu Kandung",
                alamat: "Masukan alamat sesuai domisili"
              },
              // Make sure the form is submitted to the destination defined
              // in the "action" attribute of the form when valid
              submitHandler: function(form) {
                form.submit();
              }
            });
          });
    </script>
@endsection
