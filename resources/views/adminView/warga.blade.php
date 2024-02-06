@extends('layout.mainAdmin')

@section('content')


<div class="pagetitle">
    <h1>Warga</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active ">Data Warga</li>
        </ol>
    </nav>
    @if(Session::has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="{{ route('warga.create') }}" class="btn btn-primary">Tambah Warga<i class="bi bi-arrow-right-short"></i></a>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Warga</h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.KK</th>
                                <th scope="col">Nama</th>   
                                <th scope="col">Alamat</th>
                                <th scope="col">No.Telepon</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($warga as $warga)
                            <tr>
                                <td>{{ $warga->no_kk }}</td>
                                <td>{{ $warga->nama_warga }}</td>
                                <td>{{ $warga->alamat_warga }}</td>
                                <td>{{ $warga->no_telp }}</td>
                                <td>
                                    <a href="{{ route('warga.edit', $warga->Id_warga) }}" class="btn btn-warning">Edit <i class="bi bi-arrow-right-short"></i></a>
                                    <form action="{{ route('warga.destroy', $warga->Id_warga) }}" method="POST" class="d-inline">
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