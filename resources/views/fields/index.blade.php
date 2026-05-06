@extends('layout')

@section('content')

<div class="container section">

<h2 class="mb-4">Lapangan Tersedia</h2>

<div class="row">

@foreach($data as $f)

<div class="col-md-4">
    <div class="card card-field p-3 mb-4">

        <h5>⚽ {{ $f->nama_lapangan }}</h5>
        <p class="text-muted">{{ $f->deskripsi }}</p>

        <h6 class="text-success">
            Rp {{ $f->harga_per_jam }} / jam
        </h6>

        <a href="/booking" class="btn btn-main mt-2">
            Booking Sekarang
        </a>

    </div>
</div>

@endforeach

</div>

</div>

@endsection
