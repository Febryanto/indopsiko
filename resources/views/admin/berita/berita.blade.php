@extends('admin.index')
@section('title')
    Berita
@endsection
@section('subheader')
    Halaman Admin
@endsection
@section('content')
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <div class="kt-portlet">
            <div class="kt-portlet__head">

                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
					    Daftar Berita
					</h3>
                </div>
            </div>
                <div class="kt-portlet__body">
                    <div class="table-responsive">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Judul</th>
                                <th>Subjudul</th>
                                <th>Isi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i)
                                <tr>
                                    <td>{{$i->foto}}</td>
                                    <td>{{$i->judul}}</td>
                                    <td>{{$i->subjudul}}</td>
                                    <td>{{$i->isi}}</td>
                                    <td>@if ($i->status == 1)
                                        Aktif
                                    @else
                                        Nonaktif
                                    @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>

        <!--End:: Portlet-->
    </div>
    </div>
</div>
@endsection
