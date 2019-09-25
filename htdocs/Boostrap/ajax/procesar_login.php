<?php 
require_once '/xampp/htdocs/Boostrap/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	header("Content-Type: application/json");
    $array_devolver=[];
    $email = strtolower($_POST['email']);
    $password = $_POST['password'];
    // comprobar si el user existe 
    $buscar_user = $con->prepare("SELECT * FROM usuarios WHERE email = '$email' LIMIT 1");
    $buscar_user->bindParam(':email', $email, PDO::PARAM_STR);
    $buscar_user->execute();

	if ($buscar_user->rowCount() == 1) {
		//existe
		$user = $buscar_user->fetch(PDO::FETCH_ASSOC);
		$user_id = (int) $user['user_id'];
		$hash = (string) $user['password'];
		if (password_verify($password, $hash)) {
			$_SESSION['user_id']=$user_id;
			$array_devolver['redirect'] = 'http://localhost/boostrap/admin.php';
		}else {
			$array_devolver['error']=" Los datos no son validos ";
		}


	}else {		
		$array_devolver['error']="No tienes cuenta." ;


	}
	echo json_encode($array_devolver);


}else {
	exit("FUERA DE AQUI");
}


 ?>
