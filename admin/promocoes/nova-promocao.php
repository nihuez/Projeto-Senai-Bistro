<?php include("../../path.php"); 

include('promo-control.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css"> 
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet" />
    <title>Document</title>

    <?php include("../header.php"); ?>
</head>

<body>

<section class="intro">
  <div class="bg-image h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-50 ">
            <div class="card shadow-2-strong" style="background-color: rgb(241, 244, 249);">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-borderless mb-3"> 
                  <div class="texto" style="font-family: 'Dancing Script', cursive; font-size:100px"><h1>Adicionar Promoção</h1></div>
                   <!-- Formulário -->
                   <div class="center-form">
                   <form action="promo-control.php" method="POST" enctype="multipart/form-data">
                    <!--Criar um select de itens- puxar o nome do item-->
                    <div class="form-group">
                   
                        <label for="itens">Itens :</label>
                        <select class="form-control" id="itens" name="item">
                        <option  value="" selected disabled style="display: none;">Selecione o Item...</option>
                        <?php $query = $conn->query("SELECT * FROM itens");
                                while ($itens = $query->fetch_object()) {
                                    ?>
                                    <option value="<?php echo $itens->nome; ?>"
                                    ><?php echo $itens->nome; ?></option>
                                    <?php
                                }
                                ?>
                        <select>
                    </div>
           
                    <div class="form-group">
                      <label for="valor">Valor:</label>
                      <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o Valor...">
                    </div>
                    <button type="submit" class="btn mt-4" id="btn-add" name="create-promo">Cadastrar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

