<!DOCTYPE html>
 <html>
 <head>
 	<title>QR Equipos</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 </head>
 <body>
 <?php 
 	try {
		$conexion = new PDO('mysql:host=localhost;dbname=stock_laptops', 'root', 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
	$codigos = $conexion->prepare("SELECT id_laptop FROM laptop");
	$codigos->execute();
	$codigos = $codigos->fetchAll();
  ?>
  <div class="container">
  <div class="row">
	<?php foreach ($codigos as $codigo): ?>
	<div class="col-sm text-center">
	<h1><?php echo $codigo['id_laptop']; ?></h1>
 	<img class="" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2F//localhost/project_laptops/muestra.php?codigolaptop=<?php echo $codigo['id_laptop']; ?>%2F&choe=UTF-8" title="Enlace a detalle del código" /></div>
	<?php endforeach; ?>
</div>
</div>
 </body>
 </html> 
