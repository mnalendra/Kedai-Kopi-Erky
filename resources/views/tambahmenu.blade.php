<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cerulean/bootstrap.min.css">
    <title>Tambah Data Menu</title>
</head>
<style>
   h1 {
    margin: 0;
    font-size: 52px;
    font-weight: 700;
    line-height: 64px;
    color: #0c0c0c;
    font-family:cursive;
  }
  </style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body style="background-color: rgba(216, 185, 101, 0.9)">
<div class="container mt-5">
    <h1 class="text-center mb-4 text-decoration-underline">Tambah Data Menu</h1>
    <div class="row justify-content-center">
      <div class="card col-md-8">
        <div class="card-body">
          <form action="/insertdata" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="namaMenu" class="form-label">Nama Menu</label>
              <input type="text" name="nama" class="form-control" id="namaMenu" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
              <label for="kategoriMenu" class="form-label">Kategori</label>
              <select type="text" name="kategori" class="form-control" id="kategoriMenu" aria-describedby="emailHelp" required>
                <option selected disabled>Pilih Kategori</option>
                <option value="kopi">Kopi</option>
                <option value="makanan ringan">Makanan Ringan</option>
                <option value="minuman">Minuman</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="hargaMenu" class="form-label">Harga</label>
              <input type="text" name="harga" class="form-control" id="hargaMenu" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
              <label for="fotoMenu" class="form-label">Masukkan Foto</label>
              <input type="file" name="foto" class="form-control" id="fotoMenu" required>
            </div>
            <button type="submit" class="btn btn-dark">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Menangkap formulir
            var form = document.querySelector("form");

            // Menambahkan event listener ke formulir
            form.addEventListener("submit", function(event) {
                event.preventDefault(); // Menghentikan perilaku default formulir

                // Menampilkan alert
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Data berhasil ditambahkan!",
                    showConfirmButton: false,
                    timer: 20000
                });

                // Lanjutkan dengan pengiriman formulir ke server jika diperlukan
                form.submit();
            });
        });
    </script>
</body>

</html>