@extends('layout.mainAdmin')

@section('content')


<div class="pagetitle">
    <h1>Sampah</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active ">Data Sampah</li>
        </ol>
    </nav>
    @if(Session::has('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="{{ route('sampah.create') }}" class="btn btn-primary">Tambah Sampah<i class="bi bi-arrow-right-short"></i></a>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Sampah</h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID JENIS SAMPAH</th>
                                <th scope="col">NAMA</th> 
                                <th scope="col">HARGA BELI</th> 
                                <th scope="col">HARGA JUAL</th> 
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sampah as $sampah)
                            <tr>
                                <td>{{ $sampah->id_jensam }}</td>
                                <td>{{ $sampah->nama_sampah }}</td>
                                <td>{{ $sampah->harga_beli }}</td>
                                <td>{{ $sampah->harga_jual }}</td>
                                <td>
                                    <a href="{{ route('jensam.edit', $sampah->id_jensam) }}" class="btn btn-warning">Edit <i class="bi bi-arrow-right-short"></i></a>
                                    <form action="{{ route('jensam.destroy', $sampah->id) }}" method="POST" class="d-inline">
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