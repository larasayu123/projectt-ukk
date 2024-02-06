@extends('layout.mainAdmin')

@section('content')


<div class="pagetitle">
    <h1> Pembelian </h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active ">Data Pembelian</li>
        </ol>
    </nav>
    @if(Session::has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="{{ route('pembelian.create') }}" class="btn btn-primary">Tambah Pembelian<i class="bi bi-arrow-right-short"></i></a>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Pembelian</h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO BELI</th>
                                <th scope="col">ID SAMPAH</th>
                                <th scope="col">ID WARGA</th>
                                <th scope="col">TOTAL</th>
                                <th scope="col">BERAT</th>
                                <th scope="col">TGL_TRANSAKSI</th>  
                                <th scope="col">KETERANGAN</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pembelian as $pembelian)
                            <tr>
                                <td>{{ $pembelian->no_beli }}</td>
                                <td>{{ $pembelian->id_sampah }}</td>
                                <td>{{ $pembelian->Id_warga }}</td>
                                <td>{{ $pembelian->total }}</td>
                                <td>{{ $pembelian->berat }}</td>
                                <td>{{ $pembelian->tgl_transaksi }}</td>
                                <td>{{ $pembelian->keterangan }}</td>
                                <td>
                                    <a href="{{ route('pembelian.edit', $pembelian->id) }}" class="btn btn-warning">Edit <i class="bi bi-arrow-right-short"></i></a>
                                    <form action="{{ route('pembelian.destroy', $pembelian->id) }}" method="POST" class="d-inline">
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