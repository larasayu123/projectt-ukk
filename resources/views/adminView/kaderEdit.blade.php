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
                    <form class="row g-3 action" action="{{ route('kader.update', $users->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $users->email }}">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <textarea class="form-control" id="password" name="password">{{ $users->password }}</textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="{{ route('kader.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                    <!-- End Form for editing Warga -->
                </div>
            </div>
        </div>
    </div>           
</section>
@endsection
