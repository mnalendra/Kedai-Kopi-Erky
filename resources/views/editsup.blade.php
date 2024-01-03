<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cerulean/bootstrap.min.css">
    <title>Form Edit Data Supplier</title>
</head>
 <!-- Bootstrap JS and Popper.js -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<body style="background-color: burlywood">
    <div class="container">
        <div class="editsup">
            <form action="/updatedatasup/{{ $data->id }}" method="post">
                <h1 class="text-center mb-4 ">Edit Data Supplier</h1>
                <hr>
                <h2>change to your Happiness...</h2>
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Supplier</label>
                    <input type="text" name="nama_supplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nama_supplier}}">
                </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" name="alamat_supplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->alamat_supplier}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                        <input type="text" name="notelp_supplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->notelp_supplier}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" name="email_supplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->email_supplier}}">
                    </div>
                    <div>
                        <button class="btn btn-dark" type="submit">Tambah</button>
                    </div>
            </form>
        </div>
    </div>
            <div class="right">
                <img src="img/pic2.jpg" alt="">
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
                                // Lanjutkan dengan pengiriman formulir ke server jika diperlukan
                                form.submit();
                                Swal.fire("Saved!", "", "success");
                            } else if (result.isDenied) {
                                Swal.fire("Changes are not saved", "", "info");
                            }
                        });
                    });
                });
            </script>
            

</body>
</html>