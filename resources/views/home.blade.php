<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">

</head>

<body>
  <div class="fixed-top">
    <nav id="navbar-example1" class="navbar bg-body-tertiary px-3 mb-3">
      <a style="padding-left: 5%;" class="navbar-brand" href="#">Kedai Kopi Erky</a>
      <ul class="nav nav-pills" style="padding-right: 10%;">
        <li class="nav-item">
          <a class="nav-link" href="#home" style="color: black;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio" style="color: black;">About</a>
        </li>
        <li class="nav-item item">
          <a class="nav-link " href="#" style="color: black;">Menu</a>
        </li>
        <li class="nav-item item">
          <a class="nav-link " href="#" style="color: black;">Contact</a>
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
          <div><a href="/datamenu" type="button" class="btn btn-dark btn-lg" style="margin-top: 5%;">Buy Now</a></div>
        </div>
        <div class="col-xl-6 col-lg-8 order-2 order-lg-4 home-img" style="padding-left: 5%;">
          <img src="img/home.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>

  
 
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2  style="margin-top: 2%; text-align: center">Kedai Kopi Erky</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas </p>
        </div>

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/pic1.jpg" class="img-fluid" alt="">
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

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="float: right;">
            <div class="portfolio-wrap">
              <img src="img/pic3.jpg" class="img-fluid" alt="">
            </div>
          </div> -->

        </div>
          
       
      </div>
    </section>

</body>

</html>