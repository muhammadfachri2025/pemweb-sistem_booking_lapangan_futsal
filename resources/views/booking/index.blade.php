@extends('layout')

@section('content')

<div class="container section">

<h2>Booking Lapangan</h2>

<div class="card p-4 shadow-sm">

<form method="POST" action="/booking">
@csrf

<input class="form-control mb-2" name="id_booking" placeholder="ID Booking">
<input class="form-control mb-2" name="id_user" placeholder="ID User">
<input class="form-control mb-2" name="id_fields" placeholder="ID Lapangan">

<div class="row">
    <div class="col">
        <input type="date" class="form-control mb-2">
    </div>
    <div class="col">
        <input type="time" class="form-control mb-2">
    </div>
</div>

<button class="btn btn-success w-100">
    Konfirmasi Booking
</button>

</form>

</div>

</div>

@endsection
