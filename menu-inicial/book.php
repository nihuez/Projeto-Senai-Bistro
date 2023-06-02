<?php

  if(isset($_POST['submit']))
  {
    print_r($_POST['nome']);
    print_r($_POST['contato']);
    print_r($_POST['acompanhantes']);
    print_r($_POST['mesa']);
    print_r($_POST['data']);
    print_r($_POST['hora']);
  }
 
?>

<?php include("../path.php")?>
<?php include("controllers/reservas.php");?>

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
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="">

  <title> Bistrô H's </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />

  <!--owl slider stylesheet -->

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../assets/css/responsive.css" rel="stylesheet" />

</head>

<?php include(ROOT_PATH . "/menu-inicial/header.php"); ?>

<body class="sub_page">
  <section class="book_section layout_padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="heading_container">
          <h2>
            Reserve Sua Mesa Aqui
          </h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="form_container center">
            <form action="controllers/reservas.php" method="POST">
              <div>
                <input type="text" id="nome" name="nome_cliente" class="form-control" placeholder="Digite seu nome" required>
              </div>
              <div>
                <input type="text" id="contato" name="contato_cliente" class="form-control" placeholder="Número para contato" required>
              </div>
                <select class="form-control nice-select wide" id="acompanhantes" name="acompanhantes" required>
                  <option value="" disabled selected>
                    Acompanhantes?
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
                <br>
                <select class="form-control nice-select wide" id="mesa" name="mesa"required>
                  <option value="" disabled selected>
                    Escolha sua mesa:
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control date-picker" id="data" name="data_reserva" required>
              </div>
              <br>
              <div>
                <input type="time" class="form-control" id="hora" name="hr_reserva" required>
              </div>
              <br>
              <div class="btn_box">
               <button type="submit" id="add-reservas" name="add-reservas">
                  Reservar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>



  <?php include(ROOT_PATH . "/menu-inicial/footer.php"); ?>


<!-- jQery -->
<script src="../assets/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script src="../assets/js/bootstrap.js"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- isotope js -->
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
<!-- nice select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<!-- custom js -->
<script src="../assets/js/custom.js"></script>
</body>

</html>