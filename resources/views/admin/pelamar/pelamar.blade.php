@extends('admin.index')
@section('title')
    Data Pelamar
@endsection
@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Halaman ini menampilkan data Pelamar
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Data Pelamar
                </h3>
            </div>
        </div>
            <div class="kt-portlet__body kt-portlet__body--fit">

                {{--  <!--begin: Datatable -->  --}}
                <table class="table table-striped table-hover table-checkable" id="kt_table_1">
                {{-- <table class="kt-datatable" id="html_table" width="100%"> --}}
                    <thead>
                        <tr>
                            <th title="Field #1">Nama Perusahaan</th>
                            <th title="Field #1">Nama Pelamar</th>
                            <th title="Field #1">Jabatan</th>
                            <th title="Field #3">Status Lowongan</th>
                            <th title="Field #5">Opsi</th>

                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($data as $i)
                            <tr>
                                <td>
                                    {{ $i->nama_perusahaan }}
                                </td>
                                <td>
                                    {{ $i->nama_lengkap }}
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
                                <td><form action="{{ route('pelamar.destroy', $i->id_pelamar) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{route('pelamar.show', $i->id_pelamar)}}" class="btn btn-sm btn-outline-info btn-icon btn-icon-sm" title="Detail"><i class="fa fa-info"></i></a>
                                    <a href="{{ route('pelamar.edit',$i->id_pelamar) }}" class="btn btn-sm btn-outline-warning btn-icon btn-icon-sm" title="Edit"><i class="fa fa-pen"></i></a>
                                    <button class="btn btn-sm btn-outline-danger btn-icon btn-icon-sm" type="submit" title="Hapus" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i></button>
                                </form></td>


                            </tr>

                        @endforeach

                    </tbody>
                </table>
                {{--  <!--end: Datatable -->  --}}


            </div>
        </div>
    </div>
</div>

{{--  <!-- end:: Content -->  --}}
</div>

{{-- <script>
    "use strict";
    // Class definition

    var KTDatatableHtmlTableDemo = function() {
        // Private functions

        // demo initializer
        var demo = function() {

            var datatable = $('.kt-datatable').KTDatatable({
                data: {
                    saveState: {cookie: false},
                },
                search: {
                    input: $('#generalSearch'),
                },
                columns: [
                    {
                        field: 'name',
                        title: 'Nama'
                    },{
                        field: 'nik',
                        title: 'Nik',
                        type: 'number',
                    },
                    {
                        field: 'jenis_kelamin',
                        title: 'Jenis Kelamin',
                    },

                ],
            });

        $('#kt_form_status').on('change', function() {
          datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_form_type').on('change', function() {
          datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_form_status,#kt_form_type').selectpicker();

        };

        return {
            // Public functions
            init: function() {
                // init dmeo
                demo();
            },
        };
    }();

    jQuery(document).ready(function() {
        KTDatatableHtmlTableDemo.init();
    });

</script> --}}

<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>
    {{--  <script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function(html) {
        let switchery = new Switchery(html,  { size: 'small' });
        });
       </script>
       <script>
           $(document).ready(function(){
             $('.js-switch').change(function () {
                 let status = $(this).prop('checked') === true ? 1 : 0;
                 let id_uep = $(this).data('id');
                 $.ajax({
                     type: "GET",
                     dataType: "json",
                     url: '{{ route('uep.updatestatus') }}',
                     data: {'status': status, 'id_uep': id_uep},
                     success: function (data) {
                         console.log(data.message);
                         alert(data.message);
                     }
                 });
             });
         });
       </script>
  --}}

@endsection
