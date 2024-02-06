@extends('layout.mainAdmin')
@section('content')

    <div class="pagetitle">
        <h1>Tambah Data Pembelian</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pembelian.index') }}">Pembelian</a></li>
                <li class="breadcrumb-item active">Tambah Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Data Pembelian</h5>

                        <!-- Form untuk menambahkan data warga -->
                        <form action="{{ route('pembelian.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="no_beli" class="form-label">NO BELI</label>
                                <input type="text" class="form-control" id="no_beli" name="no_beli" required>
                            </div>

                            <div class="mb-3">
                                <label for="id_sampah" class="form-label">ID SAMPAH</label>
                                <input type="text" class="form-control" id="id_sampah" name="id_sampah" required>
                            </div>

                            <div class="mb-3">
                                <label for="Id_warga" class="form-label">ID WARGA</label>
                                <input type="text" class="form-control" id="Id_warga" name="Id_warga" required>
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

                            <div class="mb-3">
                                <label for="keterangan" class="form-label">KETERANGAN</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/dashboard/pembelian" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                        <!-- End Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
