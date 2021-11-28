@extends('layouts.admin')

@section('title')
Kategori Laundry
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
                <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                        {{-- ERROR MESSAGE UNTUK gambar--}}
                        @error('gambar')
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