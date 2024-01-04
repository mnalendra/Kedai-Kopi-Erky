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
        /* CSS kustom untuk mengatur tata letak */
        .btn-custom {
            padding: 8px 16px;
            font-size: 12px;
        }
        .buttons {
            position: absolute;
            top: 50%;
            width: 20%;
            left: 70%; /* Menempatkan tombol di sisi kiri */
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 10px; /* Jarak antara tombol */
        }
        .background-image {
            position: absolute;
            top: 40%;
            right: 50%; /* Menempatkan gambar di sisi kanan */
            transform: translateY(-50%);
            width: 80%; /* Menyesuaikan lebar gambar */
            height: auto; /* Menyesuaikan proporsi gambar */
            z-index: -1; /* Meletakkan di belakang tombol */
        }
    </style>
</head>

<body>
    <div class="container">
        <img class="background-image" src="img/pic2.jpg" alt="Background Image">

        <div class="buttons">
            <a  type="button" class="btn btn-dark" href="/datamenuCustomer">Customer</a>
            <a type="button" class="btn btn-outline-secondary" href="/login">Admin</a>
        </div>
    </div>

</body>
</html>
@endsection
