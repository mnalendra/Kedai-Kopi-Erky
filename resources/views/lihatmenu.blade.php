@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <title>Lihat Menu</title>

    <style>
        /* CSS kustom untuk mengatur tombol-tombol */
        .btn-custom {
            padding: 8px 16px; /* Atur padding tombol */
            font-size: 12px; /* Atur ukuran font */
        }
        .btn-row {
            display: flex;
            justify-content: center; /* Mengatur agar tombol di tengah */
            padding-top: 40%;
            margin-top: 10%; /* Jarak antara baris tombol */
        }
        .container {
            position: relative; /* Membuat posisi relatif */
            text-align: center; /* Memastikan tombol di tengah */
            height: 500px; /* Sesuaikan tinggi sesuai gambar */
        }
    </style>
</head>
<body style="background-image: url(img/bg_1.jpg);">
    <div class="container">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center btn-row">
            <button class="btn btn-dark btn-custom"><a href="/datamenuCustomer">Customer</a></button>
        </div>

        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center btn-row">
        <button type="button" class="btn btn-outline-light btn-custom"><a href="/login">Admin</a></button>
        </div>
    </div>

</body>
</html>
@endsection