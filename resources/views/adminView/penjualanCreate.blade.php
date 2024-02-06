@extends('layout.mainAdmin')
@section('content')

    <div class="pagetitle">
        <h1>Tambah Data Warga</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('warga.index') }}">Warga</a></li>
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
                        <form action="{{ route('penjualan.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="no_jual" class="form-label">NO_JUAL</label>
                                <input type="text" class="form-control" id="no_jual" name="no_jual" required>
                            </div>

                            <div class="mb-3">
                                <label for="id_sampah" class="form-label">ID SAMPAH</label>
                                <input type="text" class="form-control" id="id_sampah" name="id_sampah" required>
                            </div>

                            <div class="mb-3">
                                <label for="id_user" class="form-label">ID KADER</label>
                                <input type="text" class="form-control" id="id_user" name="id_user" required>
                            </div>

                            <div class="mb-3">
                                <label for="total" class="form-label">TOTAL</label>
                                <input type="text" class="form-control" id="total" name="total" required>
                            </div>

                            <div class="mb-3">
                                <label for="berat" class="form-label">BERAT</label>
                                <input type="text" class="form-control" id="berat" name="berat" required>
                            </div>

                            <div class="mb-3">
                                <label for="tgl_transaksi" class="form-label">TGL_TRANSAKSI</label>
                                <input type="text" class="form-control" id="tgl_transaksi" name="tgl_transaksi" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/dashboard/penjualan" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                        <!-- End Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
