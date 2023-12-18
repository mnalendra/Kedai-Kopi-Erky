<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <title>Data Supplier</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <h1 class="text-center mb-4">Data Supplier</h1>
    <div class="container">
        <a href="/tambahsup" class="btn btn-primary">Tambah +</a>

        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
                <form action="/datasup" method="get">
                    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
                </form>
            </div>

        </div>


        <div class="row">
            <!-- @if ($pesan = Session::get('sukses'))
            <div class="alert alert-primary" role="alert">{pesan}</div>
            @endif -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Supplier</th>
                        <th scope="col">Alamat Supplier</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tanggal Kerja Sama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{$row ->id}}</th>
                        <td>{{$row ->nama_supplier}}</td>
                        <td>{{$row ->alamat_supplier}}</td>
                        <td>{{$row ->notelp_supplier}}</td>
                        <td>{{$row ->email_supplier}}</td>
                        <td>{{$row ->created_at}}</td>
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