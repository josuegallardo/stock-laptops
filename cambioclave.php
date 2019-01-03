<?php session_start();
if (isset($_SESSION['usuario'])) {
	$user = $_SESSION['usuario'];
	
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=stock_laptops', 'root', 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
	$usuarios = $conexion->prepare("SELECT * FROM user_login WHERE usuario_user = :usuario");
	$usuarios->execute(array(':usuario' => $user));
	$usuarios = $usuarios->fetchAll();
	$clave = $usuarios[0][2];
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$passwordOld = $_POST['passwordOld'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	if ($passwordOld == $clave and $password1 == $password2) {
		$actualizacion = $conexion->prepare("UPDATE user_login 
			SET pass_user=:clave WHERE usuario_user = :usuario");
		$actualizacion->execute(array(
			':clave' => $password2, 
			':usuario' => $user));
		header("Refresh:0; url=index.php");
	}
	}
	

	require 'view/cambioclave.view.php';
} else {
	header('Location: login.php');
}


?>