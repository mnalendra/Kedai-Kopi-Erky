<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous" />
    <title>Data Menu</title>
</head>

<body>
    <h1 class="text-center mb-4">Data Menu</h1>
    <div class="container">
        <a href="/tambahmenu" class="btn btn-primary">Tambah</a>
        <div class="row">
            @if ($message = Session::get('succcess'))
            <div class="alert alert-primary" role="alert">
                {{$message}}
            </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tanggal Dibuat</th>
                        <th scope="col">Terakhir Diubah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{$row ->id}}</th>
                        <td>{{$row ->nama}}</td>
                        <td>{{$row ->harga}}</td>
                        <td>{{$row ->created_at}}</td>
                        <td>{{$row ->updated_at}}</td>
                        <td>
                            <button type="button" class="btn btn-danger">
                                Hapus
                            </button>
                            <button type="button" class="btn btn-info">
                                Edit
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>