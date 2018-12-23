<?php
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=stock_laptops', 'root', 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}

// Preparamos la consulta SQL
$datosUser = $conexion->prepare("SELECT * FROM user_login where usuario_user = :usuario");
$datosUser->execute(array('usuario' => $_SESSION['usuario']));
$datosUser = $datosUser->fetchAll();
require 'view/menu_nav.view.php';
?>