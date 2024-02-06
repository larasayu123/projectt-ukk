@extends('layout.mainAdmin')
@section('content')

    <div class="pagetitle">
        <h1>Tambah Data Warga</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sampah.index') }}">Warga</a></li>
                <li class="breadcrumb-item active">Tambah Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Data Warga</h5>

                        <!-- Form untuk menambahkan data warga -->
                        <form action="{{ route('sampah.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="id_jensam" class="form-label">ID JENIS SAMPAH</label>
                                <input type="text" class="form-control" id="id_jensam" name="id_jensam" required>
                            </div>

                            <div class="mb-3">
                                <label for="nama_sampah" class="form-label">NAMA</label>
                                <input type="text" class="form-control" id="nama_sampah" name="nama_sampah" required>
                            </div>

                            <div class="mb-3">
                                <label for="harga_beli" class="form-label">HARGA BELI</label>
                                <input type="text" class="form-control" id="harga_beli" name="alamat_warga" required>
                            </div>

                            <div class="mb-3">
                                <label for="harga_jual" class="form-label">HARGA JUAL</label>
                                <input type="text" class="form-control" id="harga_jual" name="harga_jual" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/dashboard/warga" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                        <!-- End Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
