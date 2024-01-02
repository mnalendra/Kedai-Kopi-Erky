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
<body style="background-color: burlywood">
    <div class="container">
        <div class="editsup">
            <form action="/updatedata/{{ $data->id }}" method="post">
                <h1 class="text-center mb-4 ">Edit Data Menu</h1>
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
                        <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->notelp_supplier}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" name="email_supplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->email_supplier}}">
                    </div>
                    <div>
                        <button class="btn btn-dark" type="submit">Tambah</button>
                    </div>
                    <button class="btn btn-dark" type="submit">Tambah</button>
            </form>
        </div>
    </div>
            <div class="right">
                <img src="img/pic2.jpg" alt="">
            </div>
</body>
</html>