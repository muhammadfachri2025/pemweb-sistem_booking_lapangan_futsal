@extends('layout')

@section('content')

<!-- HERO -->
<div class="hero text-center d-flex align-items-center"
     style="
        background-image: url('https://jasakontraktorlapangan.id/wp-content/uploads/2023/05/Analisa-Bisnis-Lapangan-Futsal.jpg');
        background-size: cover;
        background-position: center;
        height: 70vh;
        color: white;
        position: relative;
     ">

    <!-- overlay gelap -->
    <div style="
        position:absolute;
        top:0;left:0;
        width:100%;
        height:100%;
        background:rgba(0,0,0,0.5);
    "></div>

    <div class="container position-relative">
        <h1 class="fw-bold">Booking Lapangan Futsal Online</h1>
        <p>Pesan lapangan dengan mudah, cepat, dan real-time</p>

        <a href="/fields" class="btn btn-light btn-lg mt-3">
            Booking Sekarang
        </a>
    </div>

</div>

<!-- FEATURE -->
<div class="section container text-center">
    <h2 class="mb-4">Kenapa Pilih Kami?</h2>

    <div class="row">
        <div class="col-md-4">
            <h4>⚡ Cepat</h4>
            <p>Booking hanya 1 menit</p>
        </div>

        <div class="col-md-4">
            <h4>🏟️ Banyak Lapangan</h4>
            <p>Pilihan lengkap di satu tempat</p>
        </div>

        <div class="col-md-4">
            <h4>💳 Mudah Bayar</h4>
            <p>Transfer & upload bukti</p>
        </div>
    </div>
</div>

@endsection
