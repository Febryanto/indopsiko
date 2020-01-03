@extends('admin.index')
@section('title')
    Profil
@endsection
@section('content')
<div class="row">
    <div class="col-lg-6">
        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--tab">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon kt-hidden">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                       Pie Chart 1
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                
                <canvas id="myChart"> </canvas>
            </div>
        </div>
        <!--end::Portlet-->
    </div>
    <div class="col-lg-6">
        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--tab">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon kt-hidden">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                      Pie Chart 2
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div id="kt_gchart_4" style="height:500px;"></div>
            </div>
        </div>
        <!--end::Portlet-->
    </div>
</div>
<script>
jq
</script>

@endsection