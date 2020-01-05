@extends('admin.index')
@section('title')
    Klien
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
					    Daftar Klien
					</h3>
                </div>
            </div>
                <div class="kt-portlet__body">
                    <div class="table-responsive">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>logo</th>
                                <th>Nama Perusahaan</th>
                                <th>deskripsi</th>
                                <th>website</th>
                                <th>email</th>
                                <th>telp</th>
                                <th>alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i)
                                <tr>
                                    <td>{{$i->logo}}</td>
                                    <td>{{$i->nama_perusahaan}}</td>
                                    <td>{{$i->deskripsi}}</td>
                                    <td>{{$i->website}}</td>
                                    <td>{{$i->email}}</td>
                                    <td>{{$i->telp}}</td>
                                    <td>{{$i->alamat}}</td>
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
