<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <title>Data Menu</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
        body {
            background-image: url('img/datamenu.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* You can adjust other background properties based on your design needs */
        }

        .container {
            background-color: rgba(255, 255, 255, 0); /* Adjust the opacity and color as needed */
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px; /* Adjust the margin as needed */
        }
        table {
            background-color: rgba(255, 255, 255, 0.5); /* Adjust the opacity and color as needed */
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            margin-top: 1rem;
            border-collapse: collapse;
            border-spacing: 0;
        }

        th,
        td {
            background-color: rgba(255, 255, 255, 0.1); /* Adjust the opacity and color as needed */
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
 
    </style>

<body>
    <h1 class="text-center mb-4">Data Menu</h1>
    <div class="container">
        <a href="/tambahmenu" class="btn btn-primary">Tambah +</a>

        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
                <form action="/datamenu" method="get">
                    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
                </form>
            </div>

        </div>


        <div class="row">
            <!-- @if ($pesan = Session::get('sukses'))
            <div class="alert alert-primary" role="alert">{pesan}</div>
            @endif -->
            <table class="table"style="background-color: burlywood;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Terakhir Diubah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{$row ->id}}</th>
                        <td>{{$row ->nama}}</td>
                        <td>{{$row ->kategori}}</td>
                        <td>{{$row ->harga}}</td>
                        <td>
                            <img src="{{asset('fotomenu/'.$row ->foto)}}" alt="" style="width: 50px" />
                        </td>
                        <td>{{$row ->updated_at}}</td>
                        <td>
                            <a href="/deletemenu/ {{$row ->id}} " type="button" class="btn btn-danger">
                                Hapus
                            </a>
                            <a href="/editmenu/ {{$row ->id}} " class="btn btn-info">
                                Edit
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Menangkap tombol Hapus
            var deleteButtons = document.querySelectorAll(".btn-danger");

            // Menambahkan event listener ke setiap tombol Hapus
            deleteButtons.forEach(function(button) {
                button.addEventListener("click", function(event) {
                    event.preventDefault(); // Menghentikan perilaku default tombol

                    // Menampilkan konfirmasi SweetAlert
                    Swal.fire({
                        title: "Anda yakin?",
                        text: "Data ini akan dihapus!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Ya, hapus!",
                        cancelButtonText: "Batal",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Jika pengguna mengonfirmasi, lanjutkan dengan pengiriman formulir
                            window.location.href =
                                button.getAttribute("href");
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>