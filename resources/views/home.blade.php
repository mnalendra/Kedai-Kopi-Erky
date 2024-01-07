<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="img/logo.png" rel="icon">
  <title>Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">

</head>

<body>
  @yield('content')
  <div class="fixed-top">
    <nav id="navbar-example1" class="navbar bg-body-tertiary px-3 mb-3">
      <a style="padding-left: 5%;" class="navbar-brand" href="#home">Kedai Kopi Erky</a>
      <ul class="nav nav-pills" style="padding-right: 10%;">
        <li class="nav-item">
          <a class="nav-link" href="#home" style="color: black;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio" style="color: black;">About</a>
        </li>
        <li class="nav-item item">
          <a class="nav-link " href="#menu" style="color: black;">Menu</a>
        </li>
        <li class="nav-item item">
          <a class="nav-link " href="#contact" style="color: black;">Contact</a>
        </li>
      </ul>
    </nav>
  </div>

  <section id="home" class="home">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>COFFEE WISHPERS TALES IN EVERY SIP</h1>
          <h2>"Kopi, cairan yang membangunkan, menyatu dalam aroma dan cita rasa yang memikat."</h2>
          <div><a href="/lihat-menu" type="button" class="btn btn-dark btn-lg" style="margin-top: 5%;"> See More</a></div>
        </div>
        <div class="col-xl-6 col-lg-8 order-2 order-lg-4 home-img" style="padding-left: 5%;">
          <img src="img/home.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>

  
 
    <section id="portfolio" class="portfolio" style="padding-bottom: 5px;">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2  style="margin-top: 2%; text-align: center">Kedai Kopi Erky</h2>
          <p>Kedai Kopi Erky adalah tempat yang sempurna untuk merasakan keindahan kopi dan meningkatkan kenikmatan setiap tegukan. Selamat menikmati perjalanan rasa di Kedai Kopi Erky!</p>
        </div>

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/pic2.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="img/pic2.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/pic3.jpg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="menu" class="menu" style="padding-bottom: 50px;">
      <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2 style="text-align: center;">Menu</h2>
        <p style="text-align: center;">Check Our Tasty Menu</p>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-coffee">
            <h4>Coffee</h4>
          </a>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-noncoffee">
            <h4>Non Coffee</h4>
          </a>
        </li> -->

      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

        <div class="tab-pane fade active show" id="menu-coffee">

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="img/home.png" class="glightbox"><img src="img/home.png" class="menu-img img-fluid" alt=""></a>
              <h4>Cappuccino</h4>
              <p class="ingredients">
                Kopi
              </p>
              <p class="price">
               Rp 20000
              </p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="img/espresso.png" class="glightbox"><img src="img/espresso.png" class="menu-img img-fluid" alt=""></a>
              <h4>Espresso</h4>
              <p class="ingredients">
                Kopi
              </p>
              <p class="price">
                Rp 45000
              </p>
            </div>

            <div class="col-lg-4 menu-item pb-4" >
              <a href="img/amr4.png" class="glightbox"><img src="img/amr4.png" class="menu-img img-fluid" alt=""></a>
              <h4>Americano</h4>
              <p class="ingredients">
                Kopi
              </p>
              <p class="price">
                Rp 23000
              </p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="img/str.png" class="glightbox"><img src="img/str.png" class="menu-img img-fluid" alt=""></a>
              <h4>Milkshake</h4>
              <p class="ingredients">
                Minuman
              </p>
              <p class="price">
                Rp 25000
              </p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="img/matcha.png" class="glightbox"><img src="img/matcha.png" class="menu-img img-fluid" alt=""></a>
              <h4>Green Tea</h4>
              <p class="ingredients">
                Minuman
              </p>
              <p class="price">
                Rp 30000
              </p>
            </div>

            <div class="col-lg-4 menu-item">
              <a href="img/blackt.png" class="glightbox"><img src="img/blackt.png" class="menu-img img-fluid" alt=""></a>
              <h4>Black Tea</h4>
              <p class="ingredients">
                Minuman
              </p>
              <p class="price">
                Rp 30000
              </p>
            </div>

          </div>

          <!-- <div class="tab-pane fade" id="menu-noncoffee">
            <div class="row gy-5">
              <div class="col-lg-4 menu-item">
                <a href="img/home.png" class="glightbox"><img src="img/home.png" class="menu-img img-fluid" alt=""></a>
                <h4>Black Tea</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, neroli
                </p>
                <p class="price">
                  $5.95
                </p>
              </div>

              <div class="col-lg-4 menu-item">
                <a href="img/home.png" class="glightbox"><img src="img/home.png" class="menu-img img-fluid" alt=""></a>
                <h4>Green Tea</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, neroli
                </p>
                <p class="price">
                  $5.95
                </p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      </div>

    </section>

    <section id="contact" class="contact" style="padding-top: 5px;" >
      <div class="container" data-aos="fade-up" >

        <div class="section-header">
          <h2 style="text-align: center;">Contact</h2>
          <p style="text-align: center;" >Need Help? <span>Contact Us</span></p>
        </div>

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Our Address</h3>
              <p>Jl. Pikitdro I No.16, Neglasari,<br>Cibeunying Kaler, Kota Bandung, Jawa Barat 40124</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+62 811-2199-500 - WhatssApp<br></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>kedaikopierky@gmail.com<br>kedaikopierky@gmail.comm</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-clock"></i>
              <h3>Open Hours</h3>
              <p>Every Day<br>10:00 AM - 10:00 PM</p>
            </div>
          </div>

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