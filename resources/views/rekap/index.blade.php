@extends('layouts.admin')

@section('title')
Rekap Hasil Transaksi
@endsection

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">@yield('title')</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">@yield('title')</li>
        </ol>

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="GET" action="{{route('rekap.index')}}">
        </form>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data @yield('title')
            </div>
            <br>
            <a href =" {{route('rekap.create')}} " class="btn btn-primary"type="button"><i class="fas fa-plus"></i></a>

            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bulan</th>
                            <th>Pemasukan</th>
                            <th>Pengeluaran</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Bulan</th>
                            <th>Pemasukan</th>
                            <th>Pengeluaran</th>
                            <th>Total</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($rekaps as $rek)
                        <tr>
                            <th>{{ $no++ }}</th> 
                            <td>{{$rek->bulan}}</td>
                            <td>{{$rek->pemasukan}}</td>
                            <td>{{$rek->pengeluaran}}</td>
                            <td>{{$rek->total}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
    
@endsection