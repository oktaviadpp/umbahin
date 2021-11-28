@extends('layouts.admin')

@section('title')
About Us
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
                <form action="{{ route('about.update',['about'=>$about]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Bab</label>
                        <input type="text" name="bab" value="{{$about->bab}}" class="form-control @error('bab') is-invalid @enderror" id="exampleFormControlInput1" placeholder="masukkann  bab">
                    
                        {{-- ERROR MESSAGE UNTUK bab--}}
                        @error('bab')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul</label>
                        <input type="text" name="judul" value="{{$about->judul}}" class="form-control @error('judul') is-invalid @enderror" id="exampleFormControlInput1" placeholder="masukkann  judul">
                    
                        {{-- ERROR MESSAGE UNTUK judul--}}
                        @error('judul')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Isi</label>
                        <input type="text" name="isi" value="{{$about->isi}}" class="form-control @error('isi') is-invalid @enderror" id="exampleFormControlInput1" placeholder="masukkann  isi">
                    
                        {{-- ERROR MESSAGE UNTUK isi--}}
                        @error('isi')
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