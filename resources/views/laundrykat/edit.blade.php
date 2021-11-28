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
                Edit Data @yield('title')
            </div>
            <div class="card-body">
                <form action="{{ route('laundrykat.update',['laundrykat'=>$laundrykat]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                        <input type="text" name="kategori" value="{{$laundrykat->nama_kategori }}" class="form-control @error('kategori') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter nama kategori">
                    
                        {{-- ERROR MESSAGE UNTUK kategori--}}
                        @error('kategori')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga</label>
                        <input type="number" name="harga" value="{{$laundrykat->harga }}" class="form-control @error('harga') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter nama harga">
                    
                        {{-- ERROR MESSAGE UNTUK harga--}}
                        @error('harga')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Durasi (hari)</label>
                        <input type="number" name="durasi" value="{{$laundrykat->durasi }}" class="form-control @error('durasi') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter nama durasi">
                    
                        {{-- ERROR MESSAGE UNTUK durasi--}}
                        @error('durasi')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                        <span class="error" style="color: red">* Gambar sebelumnya : {{$laundrykat->gambar }} </span>
                        <input type="file" name="gambar"  class="form-control @error('gambar') is-invalid @enderror">
                        {{-- ERROR MESSAGE UNTUK gambar--}}
                        @error('gambar')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Cuplikan</label>
                        <input type="text" name="cuplikan" value="{{$laundrykat->cuplikan }}" class="form-control @error('cuplikan') is-invalid @enderror" id="exampleFormControlInput1" placeholder="enter nama cuplikan">
                    
                        {{-- ERROR MESSAGE UNTUK cuplikan--}}
                        @error('cuplikan')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5" placeholder="Masukkan Konten Blog">{{$laundrykat->deskripsi }}</textarea>
                    
                        <!-- error message untuk deskripsi -->
                        @error('deskripsi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </form>
            </div>
        </div>
    </div>
</main>
    
@endsection