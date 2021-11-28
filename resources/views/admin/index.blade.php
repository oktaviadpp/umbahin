@extends('layouts.admin')
@section('title')
    Grafik Penjualan
@endsection
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Umbahin</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Static Navigation</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <p class="mb-0">
                    This page is an example of using static navigation. By removing the
                    <code>.sb-nav-fixed</code>
                    class from the
                    <code>body</code>
                    , the top navigation and side navigation will become static on scroll. Scroll down this page to see an example.
                </p>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data @yield('title')
            </div>
            <br>

            <div class="card-body">
                <div id="grafikpenjualan">

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('chart')
    <script src="https://code.highcharts.com/highcharts.js"></script>

    {{-- CHART --}}
    <script>
       Highcharts.chart('grafikpenjualan', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Transaksi Umbahin Laundry 2021'
            },
            xAxis: {
                categories: {!!json_encode($categories)!!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Rainfall (mm)'
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
                name: 'Bulan',
                data: {!!json_encode($data)!!}

            }]
        });
              
    </script>
    {{-- END CHART --}}
@endsection