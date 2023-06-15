<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/menu-inicial/reservas.php"); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> 
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
    <title>Document</title>

    <?php include("header.php"); ?>

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
                  <div class="texto" style="font-family: 'Dancing Script', cursive; font-size:100px"><h1>Gerenciamento de Reservas</h1></div>
                  <thead>
                      <button class="btn mt-4" id="btn-add" name="btn-add"  style="position:relative; left:80%">
                        <a href="reservas/create.php" style="color: #ffff">Adicionar</a>
                      </button>
                      <br>
                      <tr>
                        <th scope="col">NOME</th>
                        <th scope="col">CONTATO</th>
                        <th scope="col">ACOMPANHANTES</th>                      
                        <th scope="col">DATA</th>
                        <th scope="col">HORA</th>
                        <th scope="col">EDITAR</th>
                        <th scope="col">CANCELAR</th>
                      </tr>
                    </thead>
                        <tbody>
                            <?php foreach ($reserva as $reserva): ?>
                               <tr>
                                    <td><?php echo $reserva['nome_cliente']; ?></td>
                                    <td><?php echo $reserva['contato_cliente']; ?></td>
                                    <td><?php echo $reserva['acompanhantes']; ?></td>
                                    <td><?php echo $reserva['mesa']; ?></td>
                                    <td><?php echo $reserva['data_reserva']; ?></td>
                                    <td><?php echo $reserva['hr_reserva']; ?></td>

                                    <td><button type="button" class="btn btn-warning btn-sm px-3">
                                    <a style="color:black;" href="reservas/edit.php" class="edit"><i class="fa fa-edit"></i></td>

                                    <td><button type="button" class="btn btn-dark btn-sm px-3">
                                    <a  style="color:white;" href=<?php echo "../menu-inicial/reservas.php?del_id=". $reserva['id'];?>><i class="fa fa-trash"></i></td>

                                    </button>
                                    </button>
                                </tr> 
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                  </div>
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

