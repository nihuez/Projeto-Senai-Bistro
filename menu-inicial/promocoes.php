<?php 
include(ROOT_PATH . "/banco-de-dados/consultas.php");

$descontos = selectAll('desconto', []);

?>
<!DOCTYPE html>
<html>

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



  <!-- about sectin -->
  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          Descontos do Dia
        </h2>
      </div>

   
        <div class="row">
        <?php foreach ($descontos as $promo): ?>
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="assets/images/promo.png" alt="">
              </div>
              <div class="detail-box">
                <h1>
                <?php echo $promo['item']; ?>
                </h1>
                <h5>
                  <span>R$ <?php echo $promo['valor'];?></span> 
                </h5>
              </div>
            </div>
          </div> 
        <?php endforeach; ?>
        </div>


      </div>
    </div>
  </section>
 

<!-- end about section -->

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


</html>