<?php include("path.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="">

  <title> Bistrô H's </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

  <!--owl slider stylesheet -->

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="assets/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="assets/images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Bistrô H's
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">

                <a class="nav-link" href="menu-inicial/index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu-inicial/menu.php">Cardápio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu-inicial/about.php">Sobre Nós</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="menu-inicial/book.php">Reservas </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="login/login.php" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
                </svg>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                     Bem Vindo ao Bistrô H's
                    </h1>
                    <p>
                    Aqui, você encontrará uma experiência gastronômica única, repleta de sabores autênticos e ingredientes frescos. Prepare-se para se deliciar com uma variedade de massas artesanais, molhos irresistíveis e combinações de sabores que certamente agradarão o seu paladar. Esperamos que você desfrute de momentos memoráveis em nosso restaurante. Bon appétit!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          Descontos do Dia
        </h2>
      </div>
        <div class="row">
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="assets/images/o1.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Tasty Thursdays
                </h5>
                <h6>
                  <span>20%</span> Off
                </h6>
              </div>
            </div>
          </div>
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="assets/images/o2.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pizza Days
                </h5>
                <h6>
                  <span>15%</span> Off
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Nosso Cardápio
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">Todos</li>
        <li data-filter=".burger">Lasanhas</li>
        <li data-filter=".pizza">Pizzas</li>
        <li data-filter=".pasta">Massas</li>
        <li data-filter=".fries">Drinks</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="assets/images/f1.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Delicious Pizza
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                  </p>
                  <div class="options">
                    <h6>
                      $20
                    </h6>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
      <div class="btn-box">
        <a href="menu-inicial/menu.php">
         Veja Mais
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="assets/images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Somos Bistrô H's
              </h2>
            </div>
            <p>
              Descubra uma experiência única no Bistrô H's - o destino perfeito para os amantes de massas e gastronomia italiana. Adentre um ambiente acolhedor e sofisticado, onde os aromas irresistíveis e os sabores autênticos da Itália se fundem para criar uma verdadeira festa para o paladar.
            </p>
            <a href="menu-inicial/about.php">
              Leia mais
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include(ROOT_PATH . "/menu-inicial/footer.php"); ?>

  <!-- end about section -->

  <!-- jQery -->
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="assets/js/custom.js"></script>
  

</body>

</html>