<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <title>Tambah Data Menu</title>
</head>

<body>
    <h1 class="text-center mb-4">Tambah Data Menu</h1>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="/insertdata" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Menu</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kategori</label>
                            <select type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <option selected="">Pilih Kategori</option>
                                <option value="kopi">Kopi</option>
                                <option value="makanan ringan">Makanan Ringan</option>
                                <option value="minuman">Minuman</option>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>