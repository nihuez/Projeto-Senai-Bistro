<?php include("../../path.php"); 

include('cardapio-control.php');

?>
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
                  <div class="texto" style="font-family: 'Dancing Script', cursive; font-size:100px"><h1>Cadastro de Itens</h1></div>
                   <!-- Formulário -->
                   <div class="center-form">
                   <form action="novo-item.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="nome">Nome:</label>
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome...">
                    </div>
                    <div class="form-group">
                      <label for="categoria">Categoria:</label>
                      <select class="form-control" id="categoria" name="categoria">
                        <option  value="" selected disabled style="display: none;">Selecione a Categoria...</option>
                        <option  value="massas">Massa</option>
                        <option  value="lasanha" >Lasanha</option>
                        <option  value="pizzas" >Pizza</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="valor">Valor:</label>
                      <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o Valor...">
                    </div>
                    <div class="form-group">
                      <label for="img">Imagem:</label>
                      <input type="file" class="form-control" id="img" name="img" style="height:50px" placeholder="Insira a Imagem...">
                    </div>
                    <div class="form-group">
                      <label for="descricao">Descrição:</label>
                      <textarea type="text" class="form-control" id="descricao" rows="6" name="descricao" placeholder="Digite a Descrição..."></textarea>
                    </div>
                    <button type="submit" class="btn mt-4" id="btn-add" name="create-item">Cadastrar</button>
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

