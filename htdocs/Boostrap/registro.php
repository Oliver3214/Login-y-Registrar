<?php 
require_once '\xampp\htdocs\Boostrap\config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once '/xampp/htdocs/Boostrap/head.php'; ?>
<body>
	<a href="http://localhost/webex/inicio.html"> INICIO</a>
	<div class="container"> 
		<div class="row d-flex justify-content-around mt-5"> 
			<div class="card col-md-6 col-md-offset-6"> 
				<article class="card-body">
					<h4 class="card-title mb-4 mt-1 text-center">Registrarse</h4>


						<form method="POST" action="ajax/procesar_registro.php" class="form_registro">
								<div class="form-group">
									<label> email </label>
									<input type="email" class="form-control" placeholder="Email" required>
								</div>
								
								<div class="form-group">
									<label> Password </label>
									<input type="password" class="form-control" placeholder="*******">
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Registrarse


									</button>
								</div>
								<div align="center">
									<a href="footer.php">Iniciar Session</a>
								</div>
		
							</form>
					<div id="msg_error" class="alert alert-danger" role="alert" style="display: none">Error</div>

					</article>
				</div> 
			</div>
		</div>
<?php include_once '/xampp/htdocs/Boostrap/pagina.php';?> 
</body>
</html>