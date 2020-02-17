@extends('admin.index')
@section('title')
    Data User
@endsection

@section('aktif_user')
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
            Halaman ini menampilkan data User
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Data User
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
                    <h5 class="modal-title" id="tambahLabel">Tambah User</h5>

                  </div>
                  <form action="{{ route('user.store') }}" name="user" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                    <style>
                         .error {
                             color:red;
                         }
                     </style>
                                    {{ @csrf_field() }}
                                    <div class="form-group">
                                            <label for="nama_lengkap">nama lengkap</label>
                                            <input type="text" name="name" class="form-control" placeholder="nama lengkap" >
                                    </div>
                                    <div class="form-group">
                                            <label for="username">username</label>
                                            <input type="text" name="username" class="form-control" placeholder="username / nickname" >
                                    </div>
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" >
                                    </div>
                                    <div class="form-group">
                                        <label for="password">password</label>
                                        <input type="password" name="password" class="form-control" placeholder="password" >
                                </div>
                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <select class="form-control" name="jabatan">
                                    <option value="ADMIN">Admin</option>
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
                            <th title="Field #1">Nama</th>
                            <th title="Field #1">Username</th>
                            <th title="Field #1">email</th>
                            <th title="Field #3">Status</th>
                            <th title="Field #5">Keterangan</th>

                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($data as $i)
                            <tr>
                                <td>
                                    {{$i->name}}
                                </td>
                                <td>
                                    {{ $i->username }}
                                </td>
                                <td>
                                    {{ $i->email }}
                                </td>
                                <td>
                                    {{ $i->jabatan }}
                                </td>
                                <td><form action="{{ route('user.destroy', $i->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    {{--  <a href="{{route('user.show', $i->id)}}" class="btn btn-sm btn-outline-info btn-icon btn-icon-sm" title="Detail"><i class="fa fa-info"></i></a>  --}}
                                    <a href="{{ route('user.edit',$i->id) }}" class="btn btn-sm btn-outline-warning btn-icon btn-icon-sm" title="Edit"><i class="fa fa-pen"></i></a>
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
        $("form[name='user']").validate({
          // Specify validation rules
          rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            name: "required",
            username: "required",
            password:"required",
            jabatan: "required",
          },
          // Specify validation error messages
          messages: {
            name: "Masukan Judul",
            username: "masukan subjudul",
            password:"masukan password",
            jabatan: "Pilih status"
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
