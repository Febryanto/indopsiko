@extends('admin.index')
@section('title')
    Data berita
@endsection

@section('aktif_berita')
kt-menu__item--open kt-menu__item--here
@endsection
@section('content')
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
            Halaman ini menampilkan data Berita
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Data Berita
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
        <div class="kt-portlet__head-actions">

            &nbsp;
            <button type="button" class="btn btn-primary btn-brand btn-elevate btn-icon-sm" data-toggle="modal" data-target="#tambah">
                <i class="la la-plus"></i> Tambah Data
            </button>
            <!-- Modal -->
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="tambahLabel">Tambah Klien</h5>

                  </div>
                  <form action="{{ route('berita.store') }}" name="berita" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                     <style>
                         .error {
                             color:red;
                         }
                     </style>
                                    {{ @csrf_field() }}
                                    <div class="form-group">
                                            <label for="judul">judul</label>
                                            <input type="text" name="judul" class="form-control" placeholder="judul" >
                                    </div>
                                    <div class="form-group">
                                            <label for="subjudul">subjudul</label>
                                            <input type="text" name="subjudul" class="form-control" placeholder="subjudul" >
                                    </div>
                                    <div class="form-group">
                                            <label for="logo">Foto</label>
                                            <input type="file" name="foto" class="form-control" placeholder="foto" >
                                    </div>
                            <div class="form-group row">
                                <label for="isi">isi</label>
                                <textarea id="editor1" name="isi" id="" cols="70" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Status">Status Berita</label>
                            <select class="form-control" name="status">
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
                            </select>
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
    </div>		</div>
        </div>
        <div class="kt-portlet__body">
            {{--  <!--begin: Search Form -->  --}}
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
            <!--end: Search Form -->
        </div>
            <div class="kt-portlet__body kt-portlet__body--fit">

                {{--  <!--begin: Datatable -->  --}}
                <table class="table  table-hover table-checkable" id="kt_table_1">
                {{-- <table class="kt-datatable" id="html_table" width="100%"> --}}
                    <thead>
                        <tr>
                            <th title="Field #1">Foto</th>
                            <th title="Field #1">Judul</th>
                            <th title="Field #1">Subjudul</th>
                            <th title="Field #3">Status Berita</th>
                            <th title="Field #5">Opsi</th>

                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($data as $i)
                            <tr>
                                <td>
                                    <img src="{{url('assets/images/berita/'. $i->foto)}}" width="100px" alt="image" style="margin-right: 10px;" />
                                </td>
                                <td>
                                    {{ $i->judul }}
                                </td>
                                <td>
                                    {{ $i->subjudul }}
                                </td>
                                <td>
                                    @if ($i->status == 1)
                                        Aktif
                                    @else
                                        Nonaktif
                                    @endif
                                </td>
                                <td><form action="{{ route('berita.destroy', $i->id_berita) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    {{--  <a href="{{route('berita.show', $i->id_berita)}}" class="btn btn-sm btn-outline-info btn-icon btn-icon-sm" title="Detail"><i class="fa fa-info"></i></a>  --}}
                                    <a href="{{ route('berita.edit',$i->id_berita) }}" class="btn btn-sm btn-outline-warning btn-icon btn-icon-sm" title="Edit"><i class="fa fa-pen"></i></a>
                                    <button class="btn btn-sm btn-outline-danger btn-icon btn-icon-sm" type="submit" title="Hapus" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i></button>
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
      CKEDITOR.replace('editor1', {
        height: 260,
        width: 450,
      });

    });
    </script>
   <script type="text/javascript">
    $(function() {
        // Initialize form validation on the registration form.
        // It has the name attribute "registration"
        $("form[name='berita']").validate({
          // Specify validation rules
          rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            judul: "required",
            subjudul: "required",
            foto:{
                required :true,
                extension: "jpg,jpeg,png",
                filesize:2000
            },
            isi: "required",
            status: "required",
          },
          // Specify validation error messages
          messages: {
            judul: "Masukan Judul",
            subjudul: "masukan subjudul",
            foto: {
              required: "masukan gambar",
              extension: "file hanya boleh format jpg,jpeg, dan png",
              filesize: "ukuran file maksimum 2 MB"
            },
            isi: "Masukan isi konten",
            status: "Pilih status"
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
