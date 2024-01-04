<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <link href="style.css" rel="stylesheet">
    <title>Data Supplier</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

<div class="fixed-top">
    <nav id="navbar-example1" class="navbar bg-body-tertiary px-3 mb-3">
      <a style="padding-left: 5%;" class="navbar-brand" href="#">Kedai Kopi Erky</a>
      <ul class="nav nav-pills" style="padding-right: 10%;">
        <li class="nav-item">
          <a class="nav-link" href="/" style="color: black;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/datamenu" style="color: black;">Data Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/datasup" style="color: black;">Data Supplier</a>
        </li>
        <li class="nav-item item">
          <a class="nav-link " href="/login" style="color: black;">Logout</a>
        </li>
      </ul>
    </nav>
  </div>
    <h1 class="text-center mb-4" style="margin-top: 7%;">Data Supplier</h1>
    <div class="container">
        <a href="/tambahsup" class="btn btn-dark">Tambah +</a>

        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
                <form action="/datasup" method="get" style="margin-bottom: 20px;">
                    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
                </form>
            </div>

        </div>

    <div style="color: burlywood;">
        <div class="row" >
            <!-- @if ($pesan = Session::get('sukses'))
            <div class="alert alert-primary" role="alert">{pesan}</div>
            @endif -->
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Supplier</th>
                        <th scope="col">Alamat Supplier</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Email</th>
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
                            <a href="/deletesup/ {{$row ->id}} " type="button" class="btn btn-danger">
                                Hapus
                            </a>
                            <a href="/editsup/ {{$row ->id}} " class="btn btn-info">
                                Edit
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                            });

                        }
                    });
                });
            });
        });
    </script>
</body>

</html>