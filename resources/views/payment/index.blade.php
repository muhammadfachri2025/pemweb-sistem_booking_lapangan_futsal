@extends('layout')

@section('content')

<div class="container section">

<h2>Pembayaran</h2>

<div class="card p-4">

<form method="POST" action="/payment" enctype="multipart/form-data">
@csrf

<input class="form-control mb-2" name="id_payment" placeholder="ID Payment">
<input class="form-control mb-2" name="id_booking" placeholder="ID Booking">

<input type="file" class="form-control mb-2">

<button class="btn btn-primary w-100">
    Upload Bukti
</button>

</form>

</div>

</div>

@endsection
