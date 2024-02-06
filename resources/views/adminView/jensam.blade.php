@extends('layout.mainAdmin')

@section('content')


<div class="pagetitle">
    <h1>Jenis sampah</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active ">Data Jenis Sampah</li>
        </ol>
    </nav>
    @if(Session::has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="{{ route('jenis_sampah.create') }}" class="btn btn-primary">Tambah Jenis Sampah<i class="bi bi-arrow-right-short"></i></a>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Jenis sampah</h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAMA</th>  
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jenis_sampah as $jenis_sampah)
                            <tr>
                                <td>{{ $jenis_sampah->id_jensam }}</td>
                                <td>{{ $jenis_sampah->nama_sampah }}</td>
                                <td>
                                    <a href="{{ route('jenis_sampah.edit', $jenis_sampah->id_jensam) }}" class="btn btn-warning">Edit <i class="bi bi-arrow-right-short"></i></a>
                                    <form action="{{ route('jenis_sampah.destroy', $jenis_sampah->id_jensam) }}" method="POST" class="d-inline">
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