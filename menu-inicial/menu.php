
<?php 

include(ROOT_PATH . "/banco-de-dados/consultas.php");

$massas = selectAll("itens", ['categoria' => 'massas'] );
$pizzas = selectAll("itens", ['categoria' => 'pizzas']);
$lasanhas = selectAll("itens", ['categoria' => 'lasanhas']);

?>

<!DOCTYPE html>
<html>



  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Nosso Cardápio
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" onclick="filterItems('*')">Todos</li>
        <li onclick="filterItems('lasanha')" >Lasanhas</li>
        <li onclick="filterItems('pizza')">Pizzas</li>
        <li onclick="filterItems('massa')">Massas</li>
      </ul>
    
    <div class="filters-content">
    <div class="row grid">
      <?php foreach ($pizzas as $pizza): ?>
          <div class="col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                <img src="<?php echo $massa['img']; ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                   <?php echo $pizza['nome']; ?>
                  </h5>
                  <p>
                  <?php echo $pizza['descricao']; ?>
                  </p>
                  <div class="options">
                    <h6>
                    <?php echo $pizza['valor'] ;?>
                    </h6>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
       <?php endforeach; ?>
    
       <?php foreach ($massas as $massa): ?>
          <div class="col-lg-4 all massa">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo $massa['img']; ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                   <?php echo $massa['nome']; ?>
                  </h5>
                  <p>
                  <?php echo $massa['descricao'] ;?>
                  </p>
                  <div class="options">
                    <h6>
                    <?php echo $massa['valor']; ?>
                    </h6>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
       <?php endforeach; ?>
     

      
       <?php foreach ($lasanhas as $lasanha): ?>
          <div class="col-sm-6 col-lg-4 all lasanha">
            <div class="box">
              <div>
                <div class="img-box">
                <img src="<?php echo $massa['img']; ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                   <?php echo $lasanha['nome']; ?>
                  </h5>
                  <p>
                  <?php echo $lasanha['descricao']; ?>
                  </p>
                  <div class="options">
                    <h6>
                    <?php echo $lasanha['valor']; ?>
                    </h6>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
       <?php endforeach; ?>
        
 </div>
    </div>
  </section>



<script>
  
// Função para filtrar os itens com base no valor do filtro
function filterItems(filterValue) {

var items = document.querySelectorAll('.all');

items.forEach(function(item) {
    var classes = item.classList;
    
    // Se o valor do filtro for "*", mostre todos os itens de conteúdo
    if (filterValue === '*') {
    item.style.display = 'block';
    } else {
    // Caso contrário, verifique se o item tem a classe correspondente ao valor do filtro
    if (classes.contains(filterValue)) {
        item.style.display = 'block';
    } else {
        item.style.display = 'none';
    }
    }
});

}


</script>
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