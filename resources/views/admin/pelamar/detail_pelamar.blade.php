@extends('admin.index')
@section('title')
    Data Pelamar
@endsection

@section('aktif_lamaran')
kt-menu__item--open kt-menu__item--here
@endsection
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Detail Pelamar
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
    <div class="kt-portlet__head-actions">
        &nbsp;
        <a href="{{route('pelamar.index')}}" class="btn btn-sm btn-danger">Kembali</a>
    </div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        {{-- begin portlet detail pelamar --}}
        @foreach ($data as $i)

        <div class="col-xl-6">
            {{-- <!--begin:: Widgets/Applications/User/Profile1--> --}}
    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head  kt-portlet__head--noborder">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                {{-- <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                    <i class="flaticon-more-1"></i>
                </a> --}}
            </div>
        </div>
        <div class="kt-portlet__body kt-portlet__body--fit-y">
            {{-- <!--begin::Widget --> --}}
            <div class="kt-widget kt-widget--user-profile-1">
                <div class="kt-widget__head">
                    <div class="kt-widget__media">
                        {{-- <img src="{{url('assets/images/klien/'. $i->logo)}}" width="100px" alt="image" /> --}}
                    </div>
                    <div class="kt-widget__content">
                        <div class="kt-widget__section">
                            <a href="#" class="kt-widget__username">
                                Apply untuk Posisi
                                <i class="flaticon2-correct kt-font-success"></i>
                            </a>
                            <span class="kt-widget__subtitle">
                                {{$i->posisi}}
                            </span>
                        </div>

                        <div class="kt-widget__action">
                            <form action="{{ route('pelamar.destroy', $i->id_pelamar) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{route('getDownload.pelamar', $i->id_pelamar)}}" class="btn btn-sm btn-outline-info btn-icon btn-icon-sm" type="submit" title="Download CV" onclick="return confirm('Yakin ingin mendownload cv pelamar?')"><i class="fa fa-download"></i></a>
                                <button class="btn btn-sm btn-outline-danger btn-icon btn-icon-sm" type="submit" title="Hapus" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="kt-widget__body">
                    <div class="kt-widget__content">
                        <div class="kt-widget__info">
                            <span class="kt-widget__label">Nama Lengkap:</span>
                            <span class="kt-widget__data">{{$i->nama_lengkap}}</span>
                        </div>
                        <div class="kt-widget__info">
                            <span class="kt-widget__label">Nik:</span>
                            <span class="kt-widget__data">{{$i->nik}}</span>
                        </div>
                        <div class="kt-widget__info">
                            <span class="kt-widget__label">Npwp:</span>
                            <span class="kt-widget__data">{{$i->npwp}}</span>
                        </div>
                        <div class="kt-widget__info">
                            <span class="kt-widget__label">Pendidikan:</span>
                            <span class="kt-widget__data">{{$i->pendidikan}}</span>
                        </div>
                        <div class="kt-widget__info">
                            <span class="kt-widget__label">email:</span>
                            <span class="kt-widget__data">{{$i->email_lamar}}</span>
                        </div>
                        <div class="kt-widget__info">
                            <span class="kt-widget__label">No Handphone:</span>
                            <span class="kt-widget__data">{{$i->no_hp}}</span>
                        </div>
                        <div class="kt-widget__info">
                            <span class="kt-widget__label">No Sim:</span>
                            <span class="kt-widget__data">{{$i->sim}}</span>
                        </div>
                        <div class="kt-widget__info">
                            <span class="kt-widget__label">Tempat,Tanggal Lahir:</span>
                            <span class="kt-widget__data">{{$i->tempat_lahir}}, {{$i->tanggal_lahir}}</span>
                        </div>
                        <div class="kt-widget__info">
                            <span class="kt-widget__label">Jenis Kelamin:</span>
                            <span class="kt-widget__data">@if ($i->jenis_kelamin == 'L')
                                Laki-Laki
                            @else
                                Perempuan
                            @endif</span>
                        </div>
                        <div class="kt-widget__info">
                            <span class="kt-widget__label">Curriculum Vitae:</span>
                            <a href="{{route('getDownload.pelamar', $i->id_pelamar)}}" class="kt-widget__data">{{$i->cv}}</a>
                        </div>
                    </div>
                </div>
    </div>
@endforeach
        </div>
    </div>
        </div>
</div>
</div>
@endsection
