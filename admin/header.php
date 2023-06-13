<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . "admin/css/estilo.css" ?>">
  <title>Header</title>
</head>
<body>
  <nav>
    <div class="sidebar">
      <ul>
        <li><a  href="<?php echo BASE_URL . '/admin/index.php' ?>"><h3 class="title" style="font-family: 'Dancing Script', cursive; font-size:35px">Bistro H's</h3></a></li>
        <li><a href="<?php echo BASE_URL . '/admin/tb_reservas.php' ?>">RESERVAS</a></li>
        <li class="dropdown">
          <a href="#" class="dropbtn">CADASTROS</a>
          <div class="dropdown-content">
            <a href="<?php echo BASE_URL . '/admin/usuario/user.php' ?>">Usuários</a>
            <a href="<?php echo BASE_URL . '/admin/cardapio/cardapio.php' ?>">Cardápio</a>
            <a href="">Promoções</a>
          </div>
        </li>
        <li><a href="<?php echo BASE_URL . '/logout.php' ?>">SAIR</a></li>
      </ul>
    </div>
  </nav>

  <main>

  </main>

</body>
</html>
