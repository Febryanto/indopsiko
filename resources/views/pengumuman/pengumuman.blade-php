@extends('beranda')
@section('homecontent')
<style>
    .kt-widget__body {
        width: 25px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        padding: 5px;
        margin-right: 75px;
    }
</style>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="alert alert-light alert-elevate" role="alert">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
        Halaman ini menampilkan pengumuman
        </div>
    </div>
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="fa fa-info"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Pengumuman
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            {{-- <!--begin: Search Form --> --}}
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
            {{-- <!--end: Search Form --> --}}
        </div>
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="row">
                <div class="col-lg-12 kt-margin-t-20 kt-margin-b-10">

                    {{--  <!--Begin::Portlet-->  --}}
                <div id="portlet">
                <content>
                   @foreach ($data as $i)
                    <div class="kt-portlet kt-portlet--height-fluid">
                        <div class="kt-portlet__head kt-portlet__head--noborder">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            {{--  <!--begin::Widget -->  --}}
                            <div class="kt-widget kt-widget--user-profile-2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="kt-widget__head">
                                            <div class="kt-widget__media">
                                                <span> <img src="{{url('/assets/images/pengumuman/'. $i->foto)}}" id="myImg" alt="image" width="250px" height="250px"></span>
                                                <div class="kt-widget___info">
                                                    <h5>{{$i->judul}}</h5>

                                                <span class="kt-widget__desc">
                                                    {{$i->subjudul}}
                                                </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                        <div class="kt-widget__body">
                                        {!! $i->isi !!}

                                        </div>
                                </div>
                                <div class="kt-widget__footer">
                                    <a  href="{{ route('pengumuman.dtl',$i->id_pengumuman) }}"><button type="button" class="btn btn-label-danger btn-lg btn-upper">Lihat Selengkapnya</button></a>
                                </div>
                            </div>
                            {{--  <!--end::Widget -->  --}}
                        </div>
                    </div>
                    @endforeach

                </content>
                </div>
                    {{--  <!--End::Portlet-->  --}}


                </div>
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
        $("#portlet content").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
      CKEDITOR.replace('editor1', {
        height: 260,
        width: 450,
      });
    });
    </script>

@endsection
