<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kedai Kopi Erky Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="img/logo.png" rel="icon">
    <link href="style.css" rel="stylesheet">
    <style>
        .menu-item {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
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
          <a class="nav-link" href="/lihat-menu" style="color: black;">Logout</a>
        </li>
      </ul>
    </nav>
  </div>


<section id="menu" class="menu" style="padding-bottom: 50px;">
    <div class="container">
        <div class="col-auto">
        </div>
        <div class="section-title">
            <h2 style="text-align: center; margin-top: 7%;">Menu</h2>
            <p style="text-align: center;">Check Our Tasty Menu</p>

        </div> 
        <h1 class="text-center mb-4 text-light">Data Menu</h1>

        <!-- Daftar menu -->
        <div class="row">
            <form action="/datamenuCustomer" method="get" style="margin-bottom: 20px; padding-left: 60%;"  class="row g-3">
              <div class="col-auto">
                <input type="search" id="inputPassword6" name="search" placeholder="Search" class="form-control" aria-describedby="passwordHelpInline">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn btn-dark mb-3">Search</button>
              </div>
            </form>
            <!-- Looping data menu dari backend -->
            @foreach ($data as $menu)
                <!-- Setiap menu memiliki kategori -->
                <div class="col-md-4" data-kategori="{{ $menu->kategori }}">
                    <div class="menu-item">
                        <!-- Isi dari setiap menu -->
                        <a href="{{ asset('fotomenu/'.$menu->foto) }}" class="glightbox">
                            <img src="{{ asset('fotomenu/'.$menu->foto) }}" class="menu-img img-fluid" alt="" style="width: 200px;">
                        </a>
                        <h4>{{ $menu->nama }}</h4>
                        <p class="ingredients">{{ $menu->kategori }}</p>
                        <p class="price" style="text-decoration: dashed; color: brown"> Rp {{ $menu->harga }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

    </section>
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
 
</body>
</html>
