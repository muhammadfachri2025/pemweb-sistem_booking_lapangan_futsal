<!DOCTYPE html>
<html>
<head>
    <title>Booking Futsal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f7fb;
        }

        /* HEADER */
        .navbar-custom {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .navbar-brand {
            font-weight: bold;
            color: #16a34a;
        }

        /* HERO tetap bisa dipakai */
        .hero {
            position: relative;
        }

        /* FOOTER */
        .footer {
            background: #111827;
            color: #ccc;
            padding: 40px 0;
            margin-top: 60px;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .btn-main {
            background: #16a34a;
            color: white;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">

        <a class="navbar-brand" href="/">
            ⚽ Futsal Booking
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            ☰
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/fields">Lapangan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/booking">Booking</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-success btn-sm ms-2" href="/login">
                        Login
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<!-- CONTENT -->
@yield('content')

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <h5>⚽ Futsal Booking</h5>
                <p>Sistem booking lapangan futsal online cepat dan mudah.</p>
            </div>

            <div class="col-md-4">
                <h5>Menu</h5>
                <p><a href="/">Home</a></p>
                <p><a href="/fields">Lapangan</a></p>
                <p><a href="/booking">Booking</a></p>
            </div>

            <div class="col-md-4">
                <h5>Kontak</h5>
                <p>Email: support@futsal.com</p>
                <p>WhatsApp: 08xxxxxxxx</p>
            </div>

        </div>

        <hr style="border-color:#333">

        <p class="text-center mb-0">
            © 2026 Futsal Booking System
        </p>
    </div>
</footer>

</body>
</html>
