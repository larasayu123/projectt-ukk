@extends('layout.mainAdmin')

@section('content')


<div class="pagetitle">
    <h1>Penjualan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active ">Data Penjualan</li>
        </ol>
    </nav>
    @if(Session::has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="{{ route('penjualan.create') }}" class="btn btn-primary">Tambah Penjualan<i class="bi bi-arrow-right-short"></i></a>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Penjualan</h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO JUAL</th>
                                <th scope="col">ID SAMPAH</th>
                                <th scope="col">ID KADER</th>
                                <th scope="col">TOTAL</th>
                                <th scope="col">BERAT</th>
                                <th scope="col">TGL_TRANSAKSI</th>  
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penjualan as $penjualan)
                            <tr>
                                <td>{{ $penjualan->no_jual }}</td>
                                <td>{{ $penjualan->id_sampah }}</td>
                                <td>{{ $penjualan->id_user }}</td>
                                <td>{{ $penjualan->total }}</td>
                                <td>{{ $penjualan->berat }}</td>
                                <td>{{ $penjualan->tgl_transaksi }}</td>
                                <td>
                                    <a href="{{ route('penjualan.edit', $penjualan->id) }}" class="btn btn-warning">Edit <i class="bi bi-arrow-right-short"></i></a>
                                    <form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="POST" class="d-inline">
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