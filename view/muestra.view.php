<!DOCTYPE html>
<html>
<head>
	<title>Detalle laptop</title>
	<link rel="stylesheet" type="text/css" href="css/estiloDetalle.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<div class="contenedorGeneral">
	<h1 class="titulo">DETALLE LAPTOP</h1>
	<div class="contenedorDetalle">
	<table id="detalles">
	<tr>
		<td><b>CODIGO</b></td>
		<td><?php echo $id_marca_laptop; ?></td>
	</tr>
	<tr>
		<td><b>MARCA</b></td>
		<td><?php echo $marcaA; ?></td>
	</tr>
	<tr>
		<td><b>MODELO</b></td>
		<td><?php echo $modelo_laptop; ?></td>
	</tr>
	<tr>
		<td><b>SO</b></td>
		<td><?php echo $sisop; ?></td>
	</tr>
	<tr>
		<td><b>RAM</b></td>
		<td><?php echo $mram . ' ' . $tram; ?></td>
	</tr>
	<tr>
		<td><b>DD</b></td>
		<td><?php echo $dd; ?></td>
	</tr>
	<tr>
		<td><b>PROCESADOR</b></td>
		<td><?php echo $proce; ?></td>
	</tr>
	<tr>
		<td><b>EMPRESA</b></td>
		<td><?php echo $empresa; ?></td>
	</tr>
	<tr>
		<td><b>USUARIO</b></td>
		<td><?php echo $user; ?></td>
	</tr>
	<tr>
		<td><b>ESTADO</b></td>
		<td><?php echo $estado; ?></td>
	</tr>
	<tr>
		<td><b>OBERVACIÓN</b></td>
		<td><?php echo $obs; ?></td>
	</tr>
	<tr>
		<td><b>SERIE</b></td>
		<td><?php echo $serie; ?></td>
	</tr>
	</table>
</div>
</div>
</body>
</html>