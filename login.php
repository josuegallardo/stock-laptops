<?php session_start();

// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario
if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
	die();
}

// Comprobamos si ya han sido enviado los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	//$password = hash('sha512', $password);
	echo $password;
	// Nos conectamos a la base de datos
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=stock_laptops', 'root', 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}

	$statement = $conexion->prepare('SELECT * FROM user_login WHERE usuario_user = :usuario AND pass_user = :password');
	$statement->execute(array(
			':usuario' => $usuario,
			':password' => $password
		));

	$resultado = $statement->fetch();
	//$datos = $statement->fetchAll();
	if ($resultado !== false) {
		
		$_SESSION['usuario'] = $usuario;
		
header('Location: index.php');


	} else {
		$errores = '<li>Datos incorrectos</li>';
	}
}





require 'view/login.view.php';

?>