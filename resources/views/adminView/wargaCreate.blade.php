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
                        <form action="{{ route('warga.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="no_kk" class="form-label">Nomor KK</label>
                                <input type="text" class="form-control" id="no_kk" name="no_kk" required>
                            </div>

                            <div class="mb-3">
                                <label for="nama_warga" class="form-label">Nama Warga</label>
                                <input type="text" class="form-control" id="nama_warga" name="nama_warga" required>
                            </div>

                            <div class="mb-3">
                                <label for="alamat_warga" class="form-label">Alamat Warga</label>
                                <input type="text" class="form-control" id="alamat_warga" name="alamat_warga" required>
                            </div>

                            <div class="mb-3">
                                <label for="no_telp" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" required>
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
