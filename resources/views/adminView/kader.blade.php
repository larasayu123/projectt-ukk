@extends('layout.mainAdmin')

@section('content')


<div class="pagetitle">
    <h1>Kader</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active ">Data Kader</li>
        </ol>
    </nav>
    @if(Session::has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{-- <a href="{{ route('kader.create') }}" class="btn btn-primary">Kader<i class="bi bi-arrow-right-short"></i></a> --}}
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Kader</h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NAMA</th>
                                <th scope="col">EMAIL</th>   
                                <th scope="col">PASSWORD</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $users)
                            <tr>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->password}}</td>
                                <td>
                                    <a href="{{ route('kader.edit', $users->id_user) }}" class="btn btn-warning">Edit <i class="bi bi-arrow-right-short"></i></a>
                                    <form action="{{ route('kader.destroy', $users->id_user) }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus?')"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                </div>
            </div>

        </div>
    </div>
</section>

@endsection