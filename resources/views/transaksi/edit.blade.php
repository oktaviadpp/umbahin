@extends('layouts.admin')

@section('title')
Transaksi
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
                <form action="{{ route('transaksi.update', ['transaksi'=>$transaksi]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="position-option" class="form-label">Username</label>
                        <select class="form-control" id="position-option" name="username" >
                        <option >
                            -- Pilih Pelanggan -- 
                            
                        </option>
                        
                            @foreach ($pelanggans as $pel)
                                <option value="{{ $pel->id }}">{{ $pel->username}}</option>
                            @endforeach
                        </select>
                        
                        {{-- ERROR MESSAGE UNTUK username --}}
                        @error('username')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="position-option" class="form-label">Kategori Laundry</label>
                        <select class="form-control" id="position-option" name="kategori">
                        <option>
                            -- Pilih Kategori -- 
                            
                        </option>
                        
                            @foreach ($laundrykats as $kat)
                                <option value="{{ $kat->id }}">{{ $kat->nama_kategori}}</option>
                            @endforeach
                        </select>
                        
                        {{-- ERROR MESSAGE UNTUK kategori --}}
                        @error('kategori')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="position-option" class="form-label">Pick Up</label>
                        <select class="form-control" id="position-option" name="pickup">
                        <option>
                            -- Pilih Jasa Pickup -- 
                            
                        </option>
                        
                            @foreach ($pickups as $pick)
                                <option value="{{ $pick->id }}">{{ $pick->nama}}</option>
                            @endforeach
                        </select>
                        
                        {{-- ERROR MESSAGE UNTUK pickup --}}
                        @error('pickup')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jarak</label>
                        <input type="number" name="jarak" value="{{$transaksi->jarak}}" class="form-control @error('jarak') is-invalid @enderror" id="exampleFormControlInput1" placeholder="masukkann  jarak">
                    
                        {{-- ERROR MESSAGE UNTUK jarak--}}
                        @error('jarak')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Berat</label>
                        <input type="number" name="berat" value="{{$transaksi->berat}}" class="form-control @error('berat') is-invalid @enderror" id="exampleFormControlInput1" placeholder="masukkann  berat">
                    
                        {{-- ERROR MESSAGE UNTUK berat--}}
                        @error('berat')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Uang DP</label>
                        <input type="number" name="dp" value="{{$transaksi->uang_dp}}" class="form-control @error('dp') is-invalid @enderror" id="exampleFormControlInput1" placeholder="masukkann  dp">
                    
                        {{-- ERROR MESSAGE UNTUK dp--}}
                        @error('dp')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Pelunasan</label>
                        <input type="date" name="tgl_pelunasan" placeholder="YYYY-MM-DD"class="form-control @error('tgl_pelunasan') is-invalid @enderror" id="exampleFormControlInput1" placeholder="masukkann  tgl_pelunasan"> 
                    
                        {{-- ERROR MESSAGE UNTUK tgl_pelunasan --}}
                        @error('tgl_pelunasan')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror 
                    </div>

                    <div class="mb-3" >
                        <label for="position-option" class="form-label">Status</label><br>
                        <input type="radio" name="status" value="belum">Belum<br>
                        <input type="radio" name="status" value="proses">Proses<br>
                        <input type="radio" name="status" value="selesai">Selesai
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </form>
            </div>
        </div>
    </div>
</main>
    
@endsection