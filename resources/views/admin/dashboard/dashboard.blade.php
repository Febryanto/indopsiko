@extends('admin.index')
@section('title')
    Dashboard
@endsection
@section('subheader')
    Dashboard
@endsection
@section('aktif_dashboard')
kt-menu__item--open kt-menu__item--here
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

                <div id="container" style="min-width: 450px; height: 400px; max-width: 800px; margin: 0 auto"></div>
            </div>
        </div>
        <!--end::Portlet-->
    </div>

</div>

@endsection
@section('highchart')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
// Build the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Pelamar PT. Indopsiko Indonesia'
    },
    xAxis: {
        categories: {!!json_encode($categories)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        max: 20,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Jumlah Pelamar',
        data: {!! json_encode($jumlah) !!}
    }]
});

</script>    
@endsection