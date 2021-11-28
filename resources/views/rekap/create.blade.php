@extends('layouts.admin')

@section('title')
Rekap Transaksi
@endsection

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">@yield('title')</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">@yield('title')</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-plus"></i>
                Tambah Data @yield('title')
            </div>
            <div class="card-body">
                <form action="{{ route('rekap.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama bulan</label>
                        <input type="text" name="bulan" class="form-control @error('bulan') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter nama bulan">
                    
                        {{-- ERROR MESSAGE UNTUK bulan--}}
                        @error('bulan')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pemasukan</label>
                        <input type="number" name="pemasukan" class="form-control @error('pemasukan') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter nama pemasukan">
                    
                        {{-- ERROR MESSAGE UNTUK pemasukan--}}
                        @error('pemasukan')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pengeluaran</label>
                        <input type="number" name="pengeluaran" class="form-control @error('pengeluaran') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter nama pengeluaran">
                    
                        {{-- ERROR MESSAGE UNTUK pengeluaran--}}
                        @error('pengeluaran')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </form>
            </div>
        </div>
    </div>
</main>
    
@endsection