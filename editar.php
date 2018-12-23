<?php session_start();
// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if(isset($_SESSION['usuario'])) {
    try {
		$conexion = new PDO('mysql:host=localhost;dbname=stock_laptops', 'root', 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}

	if(isset($_GET['codigolaptop'])) {
    $idlaptop = $_GET["codigolaptop"];
		} else {
    $idlaptop = "LA001";
}
	$classEditar = "active";
	$cabeceraForm = "DETALLE LAPTOP: ";
	$editar = "Si";
	$laptops = $conexion->prepare("SELECT 
	LA.id_laptop, LA.id_marca, MA.nombre_marca,LA.modelo_laptop, LA.id_so, SO.nombre_so, LA.id_memoriaram, MR.cantidad_ram,
	LA.id_tecnologiaram, TR.nombre_tecnologiaram, LA.id_dd, DD.capacidad_dd, LA.id_procesador, PR.nombre_procesador, EM.id_empresa, EM.nombre_empresa, LA.usuario, LA.id_estado,
	ES.nombre_estado, LA.numserie_laptop, LA.obs_laptop
	FROM
	laptop LA, marca MA, sistema_operativo SO, memoria_ram MR, tecnologia_ram TR,
	discoduro DD, procesador PR, empresa EM, estado ES
	WHERE LA.id_laptop = :idlaptop and
	LA.id_marca = MA.id_marca and LA.id_so = SO.id_so and 
	LA.id_memoriaram = MR.id_memoriaram and LA.id_tecnologiaram = TR.id_tecnologiaram and 
	LA.id_dd = DD.id_dd and LA.id_procesador = PR.id_procesador and 
	LA.id_empresa = EM.id_empresa and LA.id_estado = ES.id_estado");
	$laptops->execute(array(':idlaptop' => $idlaptop));
	$laptops = $laptops->fetchAll();

	$id_marca_laptop = $laptops[0][1];
	$marcaA = $laptops[0][2];
	$modelo_laptop = $laptops[0][3];
	$id_sisop = $laptops[0][4];
	$sisop = $laptops[0][5];
	$id_mram = $laptops[0][6];
	$mram = $laptops[0][7];
	$id_tram = $laptops[0][8];
	$tram = $laptops[0][9];
	$id_dd = $laptops[0][10];
	$dd = $laptops[0][11];
	$id_proce = $laptops[0][12];
	$proce = $laptops[0][13];
	$id_empresa = $laptops[0][14];
	$empresa = $laptops[0][15];
	$user = $laptops[0][16];
	$id_estado = $laptops[0][17];
	$estado = $laptops[0][18];
	$serie = $laptops[0][19];
	$obs = $laptops[0][20];

	//Carga lista id laptop
	$idlaptops = $conexion->prepare('SELECT id_laptop FROM laptop');
	$idlaptops->execute(array());
	$idlaptops = $idlaptops->fetchAll();

	//Carga lista id y nombre de marca
	$marcas = $conexion->prepare('SELECT id_marca, nombre_marca FROM marca ORDER BY nombre_marca ASC');
	$marcas->execute(array());
	$marcas = $marcas->fetchAll();

	//Carga lista id y nombre de sistema operativo
	$so = $conexion->prepare('SELECT id_so, nombre_so FROM sistema_operativo');
	$so->execute(array());
	$so = $so->fetchAll();

	//Carga lista id y nombre de memoria ram
	$memorams = $conexion->prepare('SELECT id_memoriaram, cantidad_ram FROM memoria_ram');
	$memorams->execute(array());
	$memorams = $memorams->fetchAll();

	//Carga lista id y nombre de tecnologia memoria ram
	$tmemorams = $conexion->prepare('SELECT id_tecnologiaram, nombre_tecnologiaram FROM tecnologia_ram');
	$tmemorams->execute(array());
	$tmemorams = $tmemorams->fetchAll();

	//Carga lista id y nombre de disco duro
	$ddos = $conexion->prepare('SELECT id_dd, capacidad_dd FROM discoduro');
	$ddos->execute(array());
	$ddos = $ddos->fetchAll();

	//Carga lista id y nombre de procesador
	$pros = $conexion->prepare('SELECT id_procesador, nombre_procesador FROM procesador');
	$pros->execute(array());
	$pros = $pros->fetchAll();

	//Carga lista id y nombre de empresa
	$empres = $conexion->prepare('SELECT id_empresa, nombre_empresa FROM empresa ORDER BY nombre_empresa ASC');
	$empres->execute(array());
	$empres = $empres->fetchAll();

	//Carga lista id y nombre de estado
	$estas = $conexion->prepare('SELECT id_estado, nombre_estado FROM estado');
	$estas->execute(array());
	$estas = $estas->fetchAll();




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$postIdlaptop = $_POST['idlaptopPOST'];
	$postMarca = $_POST['marcaPOST'];
	$postModelo = filter_var($_POST['modeloPOST'], FILTER_SANITIZE_STRING);
	$postSisop = $_POST['sisopPOST'];
	$postMram = $_POST['mramPOST'];
	$postTram = $_POST['tramPOST'];
	$postDd = $_POST['ddPOST'];
	$postProce = $_POST['procePOST'];
	$postEmpresa = $_POST['empresaPOST'];
	$postUser = filter_var($_POST['userPOST'], FILTER_SANITIZE_STRING);
	$postEstado = $_POST['estadoPOST'];
	$postSerie = filter_var($_POST['seriePOST'], FILTER_SANITIZE_STRING);
	$postObs = filter_var($_POST['obsPOST'], FILTER_SANITIZE_STRING);

 try {
		$conexion = new PDO('mysql:host=localhost;dbname=stock_laptops', 'root', 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
	$statement = $conexion->prepare('
		UPDATE laptop 
		SET id_marca=:postMarca,modelo_laptop=:postModelo,id_so=:postSisop,id_memoriaram=:postMram,id_tecnologiaram=:postTram,id_dd=:postDd,id_procesador=:postProce,id_empresa=:postEmpresa,usuario=:postUser,id_estado=:postEstado,obs_laptop=:postObs,numserie_laptop=:postSerie WHERE id_laptop=:postIdlaptop');
	$statement->execute(array(
		':postIdlaptop' => $postIdlaptop,
		':postMarca' => $postMarca,
		':postModelo' => $postModelo,
		':postSisop' => $postSisop,
		':postMram' => $postMram,
		':postTram' => $postTram,
		':postDd' => $postDd,
		':postProce' => $postProce,
		':postEmpresa' => $postEmpresa,
		':postUser' => $postUser,
		':postEstado' => $postEstado,
		':postObs' => $postObs,
		':postSerie' => $postSerie
			));
	$accion = "modifico";
	$usuarioMov = $_SESSION['usuario'];
	$timezone  = -5; //(GMT -5:00) EST (U.S. & Canada) 
	$timezone = gmdate("j/m/Y H:i:s", time() + 3600*($timezone+date("I"))); 
	$statement = $conexion->prepare('INSERT into movimientos ( id, usuario, accion, id_laptop, fechahora)VALUES (null, :usuario, :accion, :id_laptop, :fechahora)');
	$statement->execute(array(
		':usuario' => $usuarioMov,
		':accion' => $accion,
		':id_laptop' => $postIdlaptop,
		':fechahora' => $timezone));
	header("Refresh:0; url=editar.php");
	} else {
		//echo "error";
	}


	require 'menu_nav.php';
	require 'view/form.view.php';
	} else {
    // Enviamos al usuario al formulario de registro
    header('Location: login.php');
}
 ?>