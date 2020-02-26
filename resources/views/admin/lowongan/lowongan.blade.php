@extends('admin.index')
@section('title')
    Data lowongan
@endsection

@section('aktif_lowongan')
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
            Halaman ini menampilkan data lowongan
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
                <div class="kt-portlet__head-wrapper">
        <div class="kt-portlet__head-actions">
            
            &nbsp;
            <button type="button" class="btn btn-primary btn-brand btn-elevate btn-icon-sm" data-toggle="modal" data-target="#tambah">
                <i class="la la-plus"></i> Tambah Data
            </button>
            {{--  <!-- Modal -->  --}}
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="tambahLabel">Tambah Lowongan</h5>

                  </div>
                  <form action="{{ route('lowongan.store') }}" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                                    {{ @csrf_field() }}
                                    <div class="form-group">
                                        <label for="Nama Perusahaan">Nama Perusahaan</label>
                                        <select class="form-control" name="id_klien">
                                            @foreach ($klien as $m)
                                               <option value="{{$m->id_klien}}">{{$m->nama_perusahaan}}</option> 
                                            @endforeach
                                          </select>
                                          <br>
                                          <input type="text" class="form-control" placeholder="Cari Perusahaan berdasarkan klien">
                                    </div>
                                    <div class="form-group">
                                            <label for="jabatan">jabatan</label>
                                            <input type="text" name="jabatan" class="form-control" placeholder="jabatan" value="">
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi">deskripsi</label>
                                        <textarea cols="80" id="editor1" name="deskripsi" rows="10" data-sample-short></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Status">Status Lowongan</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Dibuka</option>
                                            <option value="0">Ditutup</option>
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
        </div>
    </div>		</div>
        </div>
        <div class="kt-portlet__body">
            <!--begin: Search Form -->
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
                            <th title="Field #1">Nama Perusahaan</th>
                            <th title="Field #2">Jabatan</th>
                            <th title="Field #3">Status Lowongan</th>
                            <th title="Field #4">Keterangan</th>
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
                                <td><form action="{{ route('lowongan.destroy', $i->id_lowongan) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    {{--  <a href="{{route('lowongan.show', $i->id_lowongan)}}" class="btn btn-sm btn-outline-info btn-icon btn-icon-sm" title="Detail"><i class="fa fa-info"></i></a>  --}}
                                    <a href="{{ route('lowongan.edit',$i->id_lowongan) }}" class="btn btn-sm btn-outline-warning btn-icon btn-icon-sm" title="Edit"><i class="fa fa-pen"></i></a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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

      jQuery.fn.filterByText = function(textbox) {
        return this.each(function() {
          var select = this;
          var options = [];
          $(select).find('option').each(function() {
            options.push({
              value: $(this).val(),
              text: $(this).text()
            });
          });
          $(select).data('options', options);
      
          $(textbox).bind('change keyup', function() {
            var options = $(select).empty().data('options');
            var search = $.trim($(this).val());
            var regex = new RegExp(search, "gi");
      
            $.each(options, function(i) {
              var option = options[i];
              if (option.text.match(regex) !== null) {
                $(select).append(
                  $('<option>').text(option.text).val(option.value)
                );
              }
            });
          });
        });
      };
      
      // You could use it like this:
      
      $(function() {
        $('select').filterByText($('input'));
      });
 
    });
    </script>
    <script>
    </script>
@endsection
