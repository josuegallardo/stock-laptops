<?php 

    try {
		$conexion = new PDO('mysql:host=localhost;dbname=stock_laptops', 'root', 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
	$classLista = "active";
	$idlaptop = $_GET["codigolaptop"];
    // Preparamos la consulta SQL
	$laptops = $conexion->prepare("SELECT 
	LA.id_laptop, MA.nombre_marca,LA.modelo_laptop, SO.nombre_so, MR.cantidad_ram,
	TR.nombre_tecnologiaram, DD.capacidad_dd, PR.nombre_procesador, EM.nombre_empresa, LA.usuario,
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
	//print_r($laptops);

	$id_marca_laptop = $laptops[0][0];
	$marcaA = $laptops[0][1];
	$modelo_laptop = $laptops[0][2];
	$sisop = $laptops[0][3];
	$mram = $laptops[0][4];
	$tram = $laptops[0][5];
	$dd = $laptops[0][6];
	$proce = $laptops[0][7];
	$empresa = $laptops[0][8];
	$user = $laptops[0][9];
	$estado = $laptops[0][10];
	$serie = $laptops[0][11];
	$obs = $laptops[0][12];

	require  'view/muestra.view.php';

 ?>