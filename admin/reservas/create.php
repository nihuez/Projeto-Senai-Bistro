<?php   include("../../path.php"); 
        include(ROOT_PATH . "/menu-inicial/reservas.php");
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

<body class="sub_page">  

<?php if(count($mensagens) > 0): ?>
      <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="loginModalLabel"></h5>
                  </div>
                  <div class="modal-body">
                      <?php foreach ($mensagens as $mensagem): ?>
                          <h5><?php echo $mensagem; ?></h5>
                      <?php endforeach; 
                      ?>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" id="modal-btn" data-dismiss="modal" onclick="fecharModal()">Fechar</button>
                  </div>
              </div>
          </div>
      </div>
      <script>
      function fecharModal() {
        $('#errorModal').modal("hide");
          }

          $(document).ready(function() {
              $('#errorModal').modal('show');
          });
      </script>

  <?php endif; ?>

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
                  <div class="texto" style="font-family: 'Dancing Script', cursive; font-size:130px"><h1>Criar Reserva</h1></div>
                   <!-- Formulário -->
                   <div class="center-form">
                    <div class="form-group">
                    <form action="create.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" >
                        <div>
                      <label for="nome_cliente">Nome Cliente:</label>
                      <input type="text" class="form-control" id="nome" name="nome_cliente" placeholder="Digite o nome do cliente" required>
                    </div>
                    <div class="form-group">
                      <label for="contato_cliente">Contato:</label>
                      <input type="contato_cliente" class="form-control" id="contato" name="contato_cliente" placeholder="Digite o contato do cliente" required>
                    </div>
                    <label for="acompanhantes">Acompanhantes:</label>
                    <select class="form-control nice-select wide" id="acompanhantes" name="acompanhantes" required>
                    <option value="" disabled selected>
                    Acompanhantes?
                    </option>
                    <option value="0">
                      0
                    <option value="1">
                      1
                    </option>
                    <option value="2">
                      2
                    </option>
                    <option value="3">
                      3
                    </option>
                    <option value="5">
                      4
                    </option>
                    </select>
                    <label for="mesa">Escolha a Mesa:</label>
                    <select class="form-control" id="mesa" name="mesa"required>
                    <option value="" disabled selected>
                      Escolha sua mesa:
                    </option>
                    <option value="25">
                      25
                    </option>
                    <option value="34">
                      34
                    </option>
                    <option value="43">
                      43
                    </option>
                    <option value="59">
                      59
                    </option>
                  </select>

                  <div>
                  <label for="data_reserva">Data:</label>
                  <input type="date" class="form-control date-picker" id="data" name="data_reserva" required min="<?php echo date('Y-m-d'); ?>">
                  </div>

                  <div>
                  <label for="hr_reserva">Hora:</label>
                  <input type="time" class="form-control" id="hora" name="hr_reserva" required>
                  </div>
                  
                    <script>
                        const horaInput = document.getElementById('hora');

                        const validarHora = () => {
                            const horaSelecionada = horaInput.value;
                            const horarioProibidoInicial = '18:00';
                            const horarioProibidoFinal = '00:00';

                            if (horaSelecionada >= horarioProibidoInicial && horaSelecionada <= horarioProibidoFinal) {
                                alert('Horário não permitido!');
                                horaInput.value = '';
                            }
                        }

                        horaInput.addEventListener('change', validarHora);
                    </script>

                    <button type="submit" class="btn mt-4" id="btn-add" data-toggle="modal" data-target="#loginModal" name="add-reservas">Reservar</button>
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

