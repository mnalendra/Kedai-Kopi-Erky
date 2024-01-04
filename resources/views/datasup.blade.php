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
<style>
   body {
            background-color: burlywood;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* You can adjust other background properties based on your design needs */
        }

        .container {
            background-color: rgba(255, 255, 255, 0); /* Adjust the opacity and color as needed */
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px; /* Adjust the margin as needed */
            font-family:"Roboto", sans-serif;
        
        }

th, td {
  border: 1px solid #dddd;
  text-align: center;
  padding: 8px;
  font-family:"Roboto", sans-serif;
}
table {
  width: 100%;
  border-collapse: collapse;
  background-color: burlywood; /* Ganti dengan warna yang diinginkan */
}
h1 {
  font-size: 40px;
    font-weight: 600;
    line-height: 30px;
    color: cursive;
    font-family:"Roboto", sans-serif;
    margin-top: 70px;
  
}
hr {
  border-top: 2px solid rgba(0, 0, 0, 1); 
  width: 50%; 
  margin-left: 315px;

}
h2 {
  font-size: 20px;
    font-weight: 700px;
    line-height: 30px;
    color: #0c0c0c;
    font-family:"Roboto", sans-serif;
    text-align: center;
 
}

.footer {
    font-size: 14px;
    background-color: #1f1f24;
    padding: 50px 0;
    color: rgba(255, 255, 255, 0.7);
  }
  .footer .icon {
    margin-right: 15px;
    font-size: 24px;
    line-height: 0;
  }
  
  .footer h4 {
    font-size: 16px;
    font-weight: bold;
    position: relative;
    padding-bottom: 5px;
    color: #fff;
  }
  
  .footer .footer-links {
    margin-bottom: 30px;
  }
  
  .footer .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .footer .footer-links ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
  }
  
  .footer .footer-links ul li:first-child {
    padding-top: 0;
  }
  
  .footer .footer-links ul a {
    color: rgba(255, 255, 255, 0.6);
    transition: 0.3s;
    display: inline-block;
    line-height: 1;
  }
  
  .footer .footer-links ul a:hover {
    color: #fff;
  }
  
  .footer .social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    color: rgba(255, 255, 255, 0.7);
    margin-right: 10px;
    transition: 0.3s;
  }
  
  .footer .social-links a:hover {
    color: #fff;
    border-color: #fff;
  }
  
  .footer .copyright {
    text-align: center;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }
  
  .footer .credits {
    padding-top: 4px;
    text-align: center;
    font-size: 13px;
  }
  
  .footer .credits a {
    color: #fff;
  }
  </style>

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
    <h1 class="text-center mb-4">Data Supplier</h1>
    <hr>
    <h2>Welcome to Kedai Kopi Erky</h2>
    <div class="container">
        <a href="/tambahsup" class="btn btn-dark">Tambah +</a>

        <div class="row g-3 align-items-center mt-3 justify-content-end">
            <div class="col-auto">
                <form action="/datasup" method="get">
                    <input type="search" id="inputPassword6" name="search"placeholder="Search" class="form-control me-2"  aria-describedby="passwordHelpInline">
                </form>
            </div>

        </div>


        <div class="row">
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
    <footer id="footer" class="footer mt-6" style="margin-top: 50px;" >
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kedai-Kopi-Erky</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by Kelompok 1</a>
      </div>
    </div>
  </footer>
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