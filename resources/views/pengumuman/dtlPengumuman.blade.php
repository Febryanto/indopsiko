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
    <div class="alert alert-light alert-elevate">
        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
        <div class="alert-text">
            Detail Pengumuman
        </div>
    </div>
    <div class="kt-portlet">
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

            {{-- <!--end: Search Form --> --}}
        </div>

                    {{--  <!--Begin::Portlet-->  --}}
@foreach ($data as $i)

<div class="kt-portlet__body">
<div class="row">
    <div class="col-lg-12">
<article class="uk-comment uk-comment-primary">
<header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
<div class="uk-width-auto">
    <img src="{{url('/assets/images/pengumuman/'. $i->foto)}}" class="uk-comment-avatar" width="80" height="80" alt="">
</div>
<div class="uk-width-expand">
    <h2 class="uk-comment-title uk-margin-remove">{{$i->judul}}</h2> <br>
    <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><h3>{{$i->subjudul}}</h3></li>

    </ul>
</div>
</header>
<div class="uk-comment-body" style="text-align:justify;">
<p>  {{$i->isi}}
    </p>
</article>


</div>
<div class="col-lg-12">
<div class="kt-portlet__foot">
    <div class="row align-items-center">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-success"><a class="kt-nav__link" href="/announce">Kembali</button>
        </div>
    </div>
</div>
</div>
</div>
</div>


    </div>
</div>
</div>


{{--  {{--end::Portlet--}}



@endforeach
</div>
{{-- end:: Content --}}						</div>
                            </div>

@endsection
