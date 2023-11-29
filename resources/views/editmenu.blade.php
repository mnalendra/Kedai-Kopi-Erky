<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <title>Form Edit Data Menu</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>
    <h1 class="text-center mb-4">Edit Data Menu</h1>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="/updatedata/{{ $data->id }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Menu</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nama}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kategori</label>
                            <select type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <option selected="">{{$data->kategori}}</option>
                                <option value="kopi">Kopi</option>
                                <option value="makanan ringan">Makanan Ringan</option>
                                <option value="minuman">Minuman</option>
                            </select>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Harga</label>
                                <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->harga}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">{{$data->foto}}</label>
                                <input type="file" name="foto" class="form-control" />
                            </div>
                            <button class="btn btn-primary" type="submit">Tambah</button=>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Menangkap formulir
            var form = document.querySelector("form");

            // Menambahkan event listener ke formulir
            form.addEventListener("submit", function(event) {
                event.preventDefault(); // Menghentikan perilaku default formulir

                // Menampilkan alert
                Swal.fire({
                    title: "Do you want to save the changes?",
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: "Save",
                    denyButtonText: `Don't save`
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        Swal.fire("Saved!", "", "success");
                    } else if (result.isDenied) {
                        Swal.fire("Changes are not saved", "", "info");
                    }
                });

                // Lanjutkan dengan pengiriman formulir ke server jika diperlukan
                form.submit();
            });
        });
    </script>

</body>

</html>