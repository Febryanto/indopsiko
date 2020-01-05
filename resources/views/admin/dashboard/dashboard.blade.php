@extends('admin.index')
@section('title')
    Dashboard
@endsection
@section('subheader')
    Dashboard
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
                       Data Keseluruhan Pelamar
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

                <canvas id="myChart"> </canvas>
            </div>
        </div>
        <!--end::Portlet-->
    </div>

</div>
<script src="assets/js/pages/dashboard.js" type="text/javascript"></script>
<script src="assets/vendors/general/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/chart.js/dist/createChart.js" type="text/javascript"></script>
@endsection
