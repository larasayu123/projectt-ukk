@extends('layout.mainAdmin')

@section('content')
<div class="pagetitle">
    <h1>Edit Data Warga</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('warga.index') }}">Warga</a></li>
            <li class="breadcrumb-item active">Edit Data</li>
        </ol>
    </nav>
</div><!-- End Page Title -->       
<section class="section">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Data Warga</h5>

                    <!-- Form for editing Warga -->
                    <form class="row g-3 action" action="{{ route('warga.update', $warga->Id_warga) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="no_kk">No. KK</label>
                            <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{ $warga->no_kk }}">
                        </div>

                        <div class="form-group">
                            <label for="nama_warga">Nama Warga</label>
                            <input type="text" class="form-control" id="nama_warga" name="nama_warga" value="{{ $warga->nama_warga }}">
                        </div>

                        <div class="form-group">
                            <label for="alamat_warga">Alamat Warga</label>
                            <textarea class="form-control" id="alamat_warga" name="alamat_warga">{{ $warga->alamat_warga }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="no_telp">Nomor Telepon</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $warga->no_telp }}">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="{{ route('warga.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                    <!-- End Form for editing Warga -->
                </div>
            </div>
        </div>
    </div>           
</section>
@endsection
