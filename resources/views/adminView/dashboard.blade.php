 @extends('layout.mainAdmin')

@section('content') 
<div class="container">
    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div>
    <!-- data dokter -->
    {{-- <div class="pagetitle">
        <h1>Data Warga</h1>
    </div>
    <div class="row">
        @foreach($warga as $singleWarga)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$singleWarga->nama_warga}}</h5>
                </div>
            </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-start">
            {{$warga->links()}}
        </div>
    </div> --}}


</div>

@endsection
