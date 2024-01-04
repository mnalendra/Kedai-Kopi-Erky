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
            <h1 class="text-center mb-4 text-light">Data Menu</h1>
            <div class="row mb-3">
                <div class="col-auto">
                    <form action="/datamenuCustomer" method="get">
                        <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline" placeholder="Search...">
                    </form>
                </div>
            </div>


            <div class="tabs" data-aos="fade-up" data-aos-delay="300">
            <ul class="nav nav-tab d-flex justify-content" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-5">
                    @foreach ($data as $menu)
                        @if ($menu->kategori === 'kopi')
                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('fotomenu/'.$menu->foto) }}" class="glightbox">
                                    <img src="{{ asset('fotomenu/'.$menu->foto) }}" class="menu-img img-fluid" alt="">
                                </a>
                                <h4>{{ $menu->nama }}</h4>
                                <p class="ingredients">Lorem, deren, trataro, filede, neroli</p>
                                <p class="price">{{ $menu->harga }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>

            </ul>
            </div>

            <div class="tab-pane fade" data-aos="fade-up" data-aos-delay="300">
            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                     @foreach ($data as $menu)
                        @if ($menu->kategori === 'minuman')
                            <div class="col-lg-4 menu-item">
                                <a href="{{ asset('fotomenu/'.$menu->foto) }}" class="glightbox">
                                    <img src="{{ asset('fotomenu/'.$menu->foto) }}" class="menu-img img-fluid" alt="">
                                </a>
                                <h4>{{ $menu->nama }}</h4>
                                <p class="ingredients">Lorem, deren, trataro, filede, neroli</p>
                                <p class="price">{{ $menu->harga }}</p>
                            </div>
                        @endif
                    @endforeach
            </div>

            <div class="tabs" data-aos="fade-up" data-aos-delay="300">
            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                     @foreach ($data as $menu)
                        @if ($menu->kategori === 'makanan ringan')
                            <div class="col-lg-5 menu-item">
                                <a href="{{ asset('fotomenu/'.$menu->foto) }}" class="glightbox">
                                    <img src="{{ asset('fotomenu/'.$menu->foto) }}" class="menu-img img-fluid" alt="">
                                </a>
                                <h4>{{ $menu->nama }}</h4>
                                <p class="ingredients">Lorem, deren, trataro, filede, neroli</p>
                                <p class="price">{{ $menu->harga }}</p>
                            </div>
                        @endif
                    @endforeach
            </div>
        </div>
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
