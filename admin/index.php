<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css"> 

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
                        <a href="book.php" style="color: #ffff">Adicionar</a>
                      </button>
                      <br>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">CONTATO</th>
                        <th scope="col">ACOMPANHANTES</th>
                        <th scope="col">MESA</th>
                        <th scope="col">DATA</th>
                        <th scope="col">HORA</th>
                      </tr>
                    </thead>
                    <tbody class="text">
                      <tr>

                        </th>
                        <td>1</td>
                        <td>Andre</td>
                        <td>(47) 99179-5913</td>
                        <td>2</td>
                        <td>1</td>
                        <td>30/05/2023</td>
                        <td>21:00</td>
                        <td>
                        <button type="button" class="btn btn-warning btn-sm px-3" style="margin:4px">
                            <i class="fa fa-edit"></i>
                          <button type="button" class="btn btn-dark btn-sm px-3">
                            <i class="fa fa-trash"></i>
                          </button>
                          </button>
                        </td>
                      </tr>
                      <tr>
                      <tr>

                        </th>
                        <td>1</td>
                        <td>Andre</td>
                        <td>(47) 99179-5913</td>
                        <td>2</td>
                        <td>1</td>
                        <td>30/05/2023</td>
                        <td>21:00</td>
                        <td>
                        <button type="button" class="btn btn-warning btn-sm px-3" style="margin:4px">
                            <i class="fas fa-times">E</i>
                          <button type="button" class="btn btn-dark btn-sm px-3">
                            <i class="fas fa-times">X</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                      <tr>

                        </th>
                        <td>1</td>
                        <td>Andre</td>
                        <td>(47) 99179-5913</td>
                        <td>2</td>
                        <td>1</td>
                        <td>30/05/2023</td>
                        <td>21:00</td>
                        <td>
                        <button type="button" class="btn btn-warning btn-sm px-3" style="margin:4px">
                            <i class="fas fa-times">E</i>
                          <button type="button" class="btn btn-dark btn-sm px-3">
                            <i class="fas fa-times">X</i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        </div>
                        </td>
                      </tr>
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
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

