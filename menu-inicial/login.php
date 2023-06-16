<?php include("../path.php"); ?>
<?php include("controllers/users.php"); 


if(isset($_SESSION['id'])){
	header('location:' .  BASE_URL . "/admin/index.php" );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="../assets/css/login.css" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
	<link rel="shortcut icon" href="../assets/images/favicon.png" type="">

  <title> Bistrô H's </title>
	  <!-- Custom styles for this template -->
</head>

<?php include(ROOT_PATH . "/menu-inicial/header.php"); ?>

<body>											
<!-- Modal de Login -->
	<?php if(count($errors) > 0): ?>
		<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Erros</h5>
                </div>
                <div class="modal-body">
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; 
					$errors = [];
					?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="fecharModal()">Fechar</button>
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

	<div class="section">	
		<div class="container">
			 <div class="row  justify-content-center">	
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
						<div class="card-3d-wrap mx-auto">	
							<div class="card-3d-wrapper">	
								<div class="card-front">	
									<div class="center-wrap">	
										<div class="section text-center">	
											<h4 class="mb-4 pb-3">Entre na sua Conta</h4>	
											<form action="login.php" method="post">
												<div class="form-group">
													<input type="email" name="email" class="form-style" placeholder="Digite seu e-mail..." id="email"  value="<?php echo $email; ?>" autocomplete="none">
													<i class="input-icon fa fa-at"></i>	
												</div>	
												<div class="form-group mt-2"> 
													<input type="password" name="senha" class="form-style" placeholder="Digite sua senha..." id="senha"  value="<?php echo $senha; ?>" autocomplete="none">	
													<i class="input-icon fa fa-lock"></i>	
												</div>	
												<button id="login-btn" name="login-btn" type="submit" class="btn mt-4" data-toggle="modal" data-target="#loginModal">Login</button>
											</form>
											<p class="mb-0 mt-4 text-center"></a></p>	
											<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
											<label for="reg-log"> Esqueceu a Senha?</label>	
										</div>	
									</div>	
								</div>	
								<div class="card-back">	
									<div class="center-wrap">	
										<div class="section text-center">	
											<h4 class="mb-4 pb-3">Recupere sua Senha</h4>	
											<div class="form-group mt-2">
												<input type="email" name="logemail" class="form-style" placeholder="Informe seu e-mail..." id="logemail" autocomplete="none">
												<i class="input-icon fa fa-at"></i>	
											</div>	
											<a href="" class="btn mt-4">Enviar E-mail</a>
											<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
											<p class="mb-0 mt-4 text-center"></a></p>		
											<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
											<label for="reg-log">Voltar para o Login</label>
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
</body>
</html>


