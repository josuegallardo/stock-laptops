<?php session_start();
// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if(isset($_SESSION['usuario'])) {
    try {
		$conexion = new PDO('mysql:host=localhost;dbname=stock_laptops', 'root', 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
$laptops = $conexion->prepare("SELECT * FROM movimientos ORDER BY id DESC");
	$laptops->execute();
	$laptops = $laptops->fetchAll();
	$classLog = "active";
require 'menu_nav.php';
require 'view/logg.view.php';



} else {
    // Enviamos al usuario al formulario de registro
    header('Location: login.php');
}
 ?>