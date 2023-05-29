<?php include("../path.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="css/login.css" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <!-- Custom styles for this template -->
</head>

<?php include(ROOT_PATH . "/menu-inicial/header.php"); ?>

<body>
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
											<div class="form-group">
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="none">
												<i class="input-icon fa fa-at"></i>	
											</div>	
											<div class="form-group mt-2"> 
												<input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="none">	
												<i class="input-icon fa fa-lock"></i>	
											</div>	
											<a href="#" class="btn mt-4">Login</a>	
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
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="none">
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


