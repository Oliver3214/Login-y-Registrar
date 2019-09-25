<?php 
require_once '\xampp\htdocs\Boostrap\config.php';
 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	header("Content-Type: application/json");
	$array_devolver=[];
	$email=strtolower($_POST['email']);



		//comprobar si el user existe 
	$buscar_user = $con->prepare("select * from usuarios where email = '$email' LIMIT 1");
	$buscar_user->bindparam(':email', $email, PDO::PARAM_STR);
	$buscar_user->execute();


	if ($buscar_user->rowCount() == 1) {
		
		//existe
		$array_devolver['error'] = "Este mail ya existe";
		$array_devolver['is_login']= false;


	}else {
		//no existe
		//hash password
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

		$nuevo_user=$con->prepare("INSERT INTO usuarios (email, password) VALUES (:email, :password)");
		$nuevo_user->bindparam(':email', $email, PDO::PARAM_STR);
		$nuevo_user->bindparam(':password', $password, PDO::PARAM_STR);
		$nuevo_user->execute();


		$user_id = $con->lastinsertId();
		$_SESSION['user_id']= (int) $user_id;
		$array_devolver['redirect']= '';
		$array_devolver['is_login']= true;


	}
	echo json_encode($array_devolver);


}else {
	exit("FUERA DE AQUI");
}


 ?>
 