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

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="GET" action="{{ route('about.index') }}">
        </form>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data @yield('title')
            </div>
            <br>
            <a href =" {{route('about.create')}} " class="btn btn-primary"type="button"><i class="fas fa-plus"></i></a>
            
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
                            <th>Judul</th>
                            <th>Bab</th>
                            <th>Isi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Bab</th>
                            <th>Isi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($about_us as $about)
                        <tr>
                            <th>{{ $no++ }}</th> 
                            <td>{{$about->judul}}</td>
                            <td>{{$about->bab}}</td>
                            <td>{!!$about->isi!!}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('about.destroy', $about->id) }}" method="POST">
                                  <a href="{{ route('about.edit', $about->id) }}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
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