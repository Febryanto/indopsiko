@extends('beranda')
@section('homecontent')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Bergabunglah bersama kami
        </div>
    </div>
    <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Detail Lowongan
                </h3>
                </div>
        </div>
        @foreach ($data as $i)

        <div class="kt-portlet__body">
            <div class="kt-widget13">
                <div class="kt-widget13__item">
                    <span class="kt-widget13__desc">
                        Nama Perusahaan
                    </span>
                    <span class="kt-widget13__text kt-widget13__text--bold">
                        {{$i->nama_perusahaan}}
                    </span>
                </div>
                <div class="kt-widget13__item">
                    <span class="kt-widget13__desc kt-align-right">
                        Jabatan:
                    </span>
                    <span class="kt-widget13__text kt-widget13__text--bold">
                        {{$i->jabatan}}
                    </span>
                </div>
                <div class="kt-widget13__item">
                    <span class="kt-widget13__desc">
                        Keterangan:
                    </span>
                    <span class="kt-widget13__text">
                       {!! $i->deskripsi !!}
                    </span>
                </div>
                <div class="kt-widget13__item">
                    <span class="kt-widget13__desc">
                        Status Lowongan:
                    </span>
                    <span class="kt-widget13__text kt-widget13__text--bold">
                        @if ($i->status == 1)
                            Dibuka
                        @else
                            Ditutup
                        @endif
                    </span>
                </div>
                <div class="kt-widget13__item">
                    <span class="kt-widget13__desc">
                        Email:
                    </span>
                    <span class="kt-widget13__text">
                        {{$i->email}}
                    </span>
                </div>
                <div class="kt-widget13__item">
                    <span class="kt-widget13__desc">
                        Telp:
                    </span>
                    <span class="kt-widget13__text  kt-font-brand kt-widget13__text--bold">
                        {{$i->telp}}
                     </span>
                 </div>
             </div>
        </div>
    </div>
@endforeach
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    $(document).ready(function(){

      CKEDITOR.replace('editor1', {
        height: 260,
        width: 700,
      });
    });
    </script>
    <script src="/assets/ckeditor/ckeditor.js"></script>
@endsection
