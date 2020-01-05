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
                    <div class="table-responsive-sm">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nama Perusahaan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Deskripsi Qualifikasi</th>
                                <th></th>
                                <th scope="col">Opsi</th>
                                {{--  <th>Dibuka</th>
                                <th>Ditutup</th>  --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $i)
                                <tr>
                                    <td>{{$i->klien->nama_perusahaan}}</td>
                                    <td>{{$i->jabatan}}</td>
                                    <td>@if ($i->status == 1)
                                        Aktif
                                    @else
                                        Nonaktif
                                    @endif
                                    </td>
                                    <td>{{$i->deskripsi}}</td>
                                    <td colspan="2"><form action="{{ route('lowongan.destroy', $i->id_lowongan) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="{{ route('lowongan.edit',$i->id_lowongan) }}" class=" btn btn-sm btn-primary">Edit</a>&nbsp;
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                    </form></td>
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
