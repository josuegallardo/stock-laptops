<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if(isset($_SESSION['usuario'])) {
	$classHome = "active";
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=stock_laptops', 'root', 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
	$operativo = "ES001";
	$baja = "ES002";
	$prestamo = "ES003";
	$cantidOperativo = $conexion->prepare("SELECT COUNT(id_estado) FROM laptop WHERE id_estado = :codigo");
	$cantidOperativo->execute(array(':codigo' => $operativo));
	$cantidOperativo = $cantidOperativo->fetchAll();
	$cantidOperativo = $cantidOperativo[0][0];

	$cantidBaja = $conexion->prepare("SELECT COUNT(id_estado) FROM laptop WHERE id_estado = :codigo");
	$cantidBaja->execute(array(':codigo' => $baja));
	$cantidBaja = $cantidBaja->fetchAll();
	$cantidBaja = $cantidBaja[0][0];

	$cantidPrestamo = $conexion->prepare("SELECT COUNT(id_estado) FROM laptop WHERE id_estado = :codigo");
	$cantidPrestamo->execute(array(':codigo' => $prestamo));
	$cantidPrestamo = $cantidPrestamo->fetchAll();
	$cantidPrestamo = $cantidPrestamo[0][0];


	require 'menu_nav.php';
	require 'view/index.view.php';
	//header('Location: menu_nav.php');
	die();
} else {

	// Enviamos al usuario al formulario de registro
	header('Location: login.php');
}
?>
