<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Combined Menu</title>
    <style>
        /* Sesuaikan style jika diperlukan */
    </style>
</head>
<body >
    <section id="menu" class="menu" style="padding-bottom: 50px;">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2 style="text-align: center;">Menu</h2>
                <p style="text-align: center;">Check Our Tasty Menu</p>
            </div>
            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <!-- Isi dengan konten tabs -->
            </ul>
            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                <!-- Isi dengan konten tab-pane -->
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-light">Data Menu</h1>
        <div class="row mb-3">
            <div class="col-auto">
                <form action="/datamenuCustomer" method="get">
                    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline" placeholder="Search...">
                </form>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($data as $menu)
        <div class="col">
            <div class="card">
                <img src="{{ asset('fotomenu/' . $menu->foto) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $menu->nama }}</h5>
                    <p class="card-text">Kategori: {{ $menu->kategori }}</p>
                    <p class="card-text">Harga: {{ $menu->harga }}</p>
                </div>
            </div>
        </div>
    @endforeach
            <!-- Isi dengan konten cards -->
        </div>
    </div>
</body>
</html>
