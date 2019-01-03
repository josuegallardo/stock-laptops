<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/estiloss.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Cambio de clave</title>
</head>
<body>
	<video autoplay muted loop id="myVideo">
  <source src="media/v2.mp4" type="video/mp4">
</video>
	<div class="contenedor2">
		<h1 class="titulo">Cambio de clave</h1>
		<form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<div class="form-group">
				<i class="icono izquierda fas fa-user"></i><input disabled class="usuario" type="text" name="usuario" placeholder="<?php echo $user ?>">
				<i class="icono izquierda fas fa-key"></i><input class="usuario" type="password" name="passwordOld" placeholder="Clave anterior">
				<i class="icono izquierda fas fa-lock"></i><input class="usuario" type="password" name="password1" placeholder="Nueva clave">
				<i class="icono izquierda fas fa-lock"></i><input class="password_btn" type="password" name="password2" placeholder="Repetir clave">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>

			<!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>

		

	</div>
</body>
<script type="text/javascript">
	$('body').keypress(function(e){
if (e.keyCode == 13)
{
    $('.formulario').submit();
}
});
</script>
</html>