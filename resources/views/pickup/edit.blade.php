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
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-plus"></i>
                Edit Data @yield('title')
            </div>
            <div class="card-body">
                <form action="{{ route('pickup.update',['pickup'=>$pickup]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Jasa</label>
                        <input type="text" name="nama" value="{{$pickup->nama}}" class="form-control @error('nama') is-invalid @enderror" id="exampleFormControlInput1" placeholder="masukkann  nama">
                    
                        {{-- ERROR MESSAGE UNTUK nama--}}
                        @error('nama')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Harga per km</label>
                        <input type="number" name="harga" value="{{$pickup->harga}}" class="form-control @error('harga') is-invalid @enderror" id="exampleFormControlInput1" placeholder="masukkann  harga">
                    
                        {{-- ERROR MESSAGE UNTUK harga--}}
                        @error('harga')
                        <div class="alert alert-danger" role="alert">
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