@extends('admin.index')
@section('title')
    Profil
@endsection
@section('subheader')
    Halaman Admin
@endsection
@section('aktif_profil')
kt-menu__item--open kt-menu__item--here
@endsection
@section('content')
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <div class="kt-portlet">
            <div class="kt-portlet__head">

                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
					    Profil Perusahaan
					</h3>
                </div>
            </div>
            <div class="kt-form kt-form--label-right">
                <div class="kt-portlet__body">
                    <div class="row">
                        @foreach ($data as $i)

                    <div class="col-lg-3">
                        <div class="kt-widget kt-widget--user-profile-3" style="margin:70px 120px;">
                            <div class="kt-widget__top">
                                <div class="kt-widget__media">
                                    <img src="assets/images/logos/{{$i->logo}}" alt="image">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8">
                    <div class="form-group form-group-xs row">
                        <label class="col-4 col-form-label">Nama Perusahaan:</label>
                        <div class="col-8">
                            <span class="form-control-plaintext kt-font-bolder">{{$i->nama_perusahaan}}</span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-4 col-form-label">Motto:</label>
                        <div class="col-8">
                            <span class="form-control-plaintext kt-font-bolder">{{$i->motto}}</span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-4 col-form-label">Website:</label>
                        <div class="col-8">
                            <span class="form-control-plaintext"><span class="kt-font-bolder">{{$i->website}}</span></span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-4 col-form-label">Email:</label>
                        <div class="col-8">
                            <span class="form-control-plaintext kt-font-bolder">{{$i->email}}</span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-4 col-form-label">Telp:</label>
                        <div class="col-8">
                            <span class="form-control-plaintext kt-font-bolder">
                                    {{$i->telp}}
                                </span>
                        </div>
                    </div>
                    <div class="form-group form-group-xs row">
                        <label class="col-4 col-form-label">Alamat:</label>
                        <div class="col-8">
                            <span class="form-control-plaintext kt-font-bolder">
                                    {{$i->alamat}}
                                </span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions kt-space-between">
                        <a href="{{ route('proper.edit',$i->id_profil)}}" class="btn btn-label-brand btn-sm btn-bold">Edit</a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <!--End:: Portlet-->
    </div>
    </div>
</div>
@endsection
