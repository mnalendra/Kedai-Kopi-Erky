<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cerulean/bootstrap.min.css">
    <title>Form Edit Data Menu</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
 body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    width: 100%;
    display: flex;
    max-width: 850px;
    background: #fff;
    border-radius: 0px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
}

.editmenu {
    width: 500px;
}

form {
    width: 300px;
    margin: 30px ;
}

h1 {
  font-size: 30px;
    font-weight: 700;
    line-height: 30px;
    color: #0c0c0c;
    font-family:cursive;
}
h2 {
  font-size: 15px;
    font-weight: 700px;
    line-height: 30px;
    color: #0c0c0c;
    font-family:cursive;
    text-align: center;
}

hr {
    border-top: 2px solid  rgba(216, 185, 101, 0.9);
}

p {
    text-align: center;
    margin: 10px;
}

.right img {
    width: 400px;
    height: 100%;
    margin-left: 75px;
   
}

form label {
    display: block;
    font-size: 16px;
    font-weight: 600;
    padding: 5px;
    
}

input {
    width: 100%;
    margin: 2px;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 5px;
    border: 5px solid gray;
}

button {
    border: none;
    outline: none;
    padding: 8px;
    width: 100%;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
}

@media (max-width: 880px) {
    .container {
        width: 100%;
        max-width: 750px;
        margin-left: 20px;
        margin-right: 20px;
    }

    form {
        width: 500px;
        margin: 20px auto;
    }

    .editmenu {
        width: 500px;
        padding: 20px;
    }

    button {
        width: 100%;
    }

    .right img {
        width: 100%;
        height: 100%;
    }
  }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<body style="background-color: burlywood">
<div class="container">
    <div class="editmenu">
                    <form action="/updatedata/{{ $data->id }}" method="post" enctype="multipart/form-data">
                    <h1 class="text-center mb-4 ">Edit Data Menu</h1>
                    <hr>
                    <h2>change to your Happiness...</h2>
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
                        </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Harga</label>
                                <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->harga}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">{{$data->foto}}</label>
                                <input type="file" name="foto" class="form-control" />
                            </div>
                            <div>
                                
                                <button class="btn btn-dark" type="submit">Tambah</button>
                            </div>
        <div class="right">
            <img src="img/pic1.jpg"alt="">
        </div>
                    </form>
   
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