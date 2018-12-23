<?php session_start();
// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if(isset($_SESSION['usuario'])) {
    try {
		$conexion = new PDO('mysql:host=localhost;dbname=stock_laptops', 'root', 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
	$classNuevo = "active";
	$cabeceraForm = "REGISTRO DE NUEVA LAPTOP";
	$avisoNuevo = "El campo marca y estado son obligatorios";
    $idlaptop = " ";
    $id_marca_laptop = "";
	$marcaA = "Marca";
	//$modelo_laptop = $laptops[0][3];
	$id_sisop = "";
	$sisop = "Sistema Operativo";
	$id_mram = "";
	$mram = "Memoria Ram";
	$id_tram = "";
	$tram = "Tecnologia  Ram";
	$id_dd = "";
	$dd = "Disco Duro";
	$id_proce = "";
	$proce = "Procesador";
	$id_empresa = "";
	$empresa = "Empresa";
	$user = "";
	$id_estado = "";
	$estado = "Estado";
	$serie = "";
	$obs = "";

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


	$nuevoID = $conexion->prepare('SELECT id_laptop FROM laptop ORDER BY id_laptop DESC LIMIT 1');
	$nuevoID->execute(array());
	$nuevoID = $nuevoID->fetchAll();
	
	//GENERAR NUEVO CODIGO

	$nuevocodigo = substr($nuevoID[0][0], -3);
	$nuevocodigo = $nuevocodigo + 1;
	if (strlen($nuevocodigo) == 1) {
		$nuevocodigo = "00" . $nuevocodigo;
	} elseif (strlen($nuevocodigo) == 2) {
		$nuevocodigo = "0". $nuevocodigo;
	}
	$nuevocodigo = "LA" . $nuevocodigo;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$postIdlaptop = $nuevocodigo;
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
if ($postMarca == "" or 
	$postSisop =="" or 
	$postMram == "" or
	$postTram == "" or
	$postDd == "" or
	$postProce == "" or
	$postEmpresa == "" or
	$postEstado == ""
	) {
	$errorForm = "Debe llenar la marca o estado del equipo";
} else {

 try {
		$conexion = new PDO('mysql:host=localhost;dbname=stock_laptops', 'root', 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
	$statement = $conexion->prepare('INSERT INTO `laptop`(`id_laptop`, `id_marca`, `modelo_laptop`, `id_so`, `id_memoriaram`, `id_tecnologiaram`, `id_dd`, `id_procesador`, `id_empresa`, `usuario`, `id_estado`, `obs_laptop`, `numserie_laptop`) VALUES (:postIdlaptop,:postMarca,:postModelo,:postSisop,:postMram,:postTram,:postDd,:postProce,:postEmpresa,:postUser,:postEstado,:postObs,:postSerie)');
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
	$accion = "agrego";
	$usuarioMov = $_SESSION['usuario'];
	$timezone  = -5; //(GMT -5:00) EST (U.S. & Canada) 
	$timezone = gmdate("j/m/Y H:i:s", time() + 3600*($timezone+date("I"))); 
	$statement = $conexion->prepare('INSERT into movimientos ( id, usuario, accion, id_laptop, fechahora)VALUES (null, :usuario, :accion, :id_laptop, :fechahora)');
	$statement->execute(array(
		':usuario' => $usuarioMov,
		':accion' => $accion,
		':id_laptop' => $postIdlaptop,
		':fechahora' => $timezone));


	header("Refresh:0; url=datatable.php");
	}
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