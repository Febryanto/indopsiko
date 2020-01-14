@extends('admin.index')
@section('title')
    Data Pelamar
@endsection

@section('aktif_lamaran')
kt-menu__item--open kt-menu__item--here
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
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
        <div class="kt-portlet__head-actions">

            &nbsp;
            {{--  <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                <i class="la la-plus"></i>
                New Record
            </a>  --}}
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
            {{--  <!--end: Search Form -->  --}}
        </div>
            <div class="kt-portlet__body kt-portlet__body--fit">

                {{--  <!--begin: Datatable -->  --}}
                <table class="table  table-hover table-checkable" id="kt_table_1">
                {{-- <table class="kt-datatable" id="html_table" width="100%"> --}}
                    <thead>
                        <tr>
                            <th title="Field #1">Nama Perusahaan</th>
                            <th title="Field #1">Nama Pelamar</th>
                            <th title="Field #1">Jabatan</th>
                            <th title="Field #3">Pendidikan</th>
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
                                    {{$i->pendidikan}}
                                </td>
                                <td><form action="{{ route('pelamar.destroy', $i->id_pelamar) }}" method="post">
                                    {{ csrf_field() }}
                                    <a href="{{route('pelamar.show', $i->id_pelamar)}}" class="btn btn-sm btn-outline-info btn-icon btn-icon-sm" title="Detail"><i class="fa fa-info"></i></a>
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
    });
    </script>

@endsection
