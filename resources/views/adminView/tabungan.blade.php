@extends('layout.mainAdmin')

@section('content')


<div class="pagetitle">
    <h1>Tabungan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active ">Data Tabungan</li>
        </ol>
    </nav>
    @if(Session::has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="{{ route('tabungan.create') }}" class="btn btn-primary">Tambah Tabungan<i class="bi bi-arrow-right-short"></i></a>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Tabungan</h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID WARGA</th>
                                <th scope="col">SALDO</th> 
                                <th scope="col">KETERANGAN</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tabungan as $tabungan)
                            <tr>
                                <td>{{ $tabungan->Id_warga }}</td>
                                <td>{{ $tabungan->saldo }}</td>
                                <td>{{ $tabungan->keterangan }}</td>
                                <td>
                                    <a href="{{ route('tabungan.edit', $tabungan->Id_warga) }}" class="btn btn-warning">Edit <i class="bi bi-arrow-right-short"></i></a>
                                    <form action="{{ route('tabungan.destroy', $tabungan->Id_warga) }}" method="POST" class="d-inline">
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