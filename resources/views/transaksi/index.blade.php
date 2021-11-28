@extends('layouts.admin')

@section('title')
Pick Up
@endsection

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">@yield('title')</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">@yield('title')</li>
        </ol>

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="GET" action="{{ route('transaksi.index') }}">
        </form>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data @yield('title')
            </div>
            <br>
            <a href =" {{route('transaksi.create')}} " class="btn btn-primary"type="button"><i class="fas fa-plus"></i></a>
            
            {{-- ALERT MESSAGE --}}
            @if ($message = Session::get('message'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <div>
                {{ $message }}
            </div>
            </div>
            @endif

            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Kategori Laundry</th>
                            <th>Pickup</th>
                            <th>Kode Transaksi</th>
                            <th>Jarak</th>
                            <th>Berat</th>
                            <th>Total</th>
                            <th>Uang DP</th>
                            <th>Sisa</th>
                            <th>Tgl Masuk</th>
                            <th>Tgl Selesai</th>
                            <th>Tgl Pelunasan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Kategori Laundry</th>
                            <th>Pickup</th>
                            <th>Kode Transaksi</th>
                            <th>Jarak</th>
                            <th>Berat</th>
                            <th>Total</th>
                            <th>Uang DP</th>
                            <th>Sisa</th>
                            <th>Tgl Masuk</th>
                            <th>Tgl Selesai</th>
                            <th>Tgl Pelunasan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($transaksis as $tran)
                        <tr>
                            <th>{{ $no++ }}</th> 
                            <td>{{$tran->pelanggan->nama}}</td>
                            <td>
                                {{$tran->laundrykat->nama_kategori}}
                            </td>
                            <td>{{$tran->pickup->nama}}</td>
                            <td>{{$tran->kode_transaksi}}</td>
                            <td>{{$tran->jarak}} km</td>
                            <td>{{$tran->berat}} kg</td>
                            {{-- TOTAL --}}
                            <td>
                                {{-- {{($tran->berat * $tran->laundrykat->harga) + ($tran->pickup->harga * $tran->jarak)}} --}}
                                {{$tran->total}}
                            </td>
                            <td>{{$tran->uang_dp}}</td>
                            {{-- SISA --}}
                            <td>
                                {{$tran->sisa}}
                            </td>
                            
                            <td>{{$tran->tgl_msk}}</td>
                            <td>{{$tran->tgl_selesai}}</td>
                            <td>{{$tran->tgl_pelunasan}}</td>
                            <td>{{$tran->status}}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('transaksi.destroy', $tran->id) }}" method="POST">
                                  <a href="{{ route('transaksi.edit', $tran->id) }}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                              </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
    
@endsection