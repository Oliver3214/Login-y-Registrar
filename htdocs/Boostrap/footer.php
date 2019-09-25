<?php 
require_once '\xampp\htdocs\Boostrap\config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once '/xampp/htdocs/Boostrap/head.php'; ?>
<body >
    <a href="http://localhost/webex/inicio.html"> INICIO</a>
    <div class="container">
        <div class="row d-flex justify-content-around mt-5">
            <div class="card col-md-6 col-md-offset-6">
                <article class="card-body">
                    <h4 class="card-title mb-4 mt-1 text-center">Login</h4>
                    <form action="POST" class="form_login">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="email" require>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="*******">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Iniciar sesion</buttom>
                        </div>
                        <div align="center"><a href="registro.php">Registrarse</a></div>
                        <div align="center"><a href="http://localhost/webex/inicio.html">Regresar al inicio </a></div>
                    </form>
                    
                </article>
            </div>
        </div>
    </div>
<?php include_once '/xampp/htdocs/Boostrap/pagina.php';?> 
</body>
</html>
