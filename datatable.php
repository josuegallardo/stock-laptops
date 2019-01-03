<?php session_start();
// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if(isset($_SESSION['usuario'])) {
    try {
		$conexion = new PDO('mysql:host=localhost;dbname=stock_laptops', 'root', 'root');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}
	$classLista = "active";
    // Preparamos la consulta SQL
    if (isset($_GET['nombre_estado'])) {
    	$estadoL =$_GET['nombre_estado'];
    	$laptops = $conexion->prepare("SELECT 
	LA.id_laptop, MA.nombre_marca,LA.modelo_laptop, SO.nombre_so, MR.cantidad_ram,
	TR.nombre_tecnologiaram, DD.capacidad_dd, PR.nombre_procesador, EM.nombre_empresa, 
	ES.nombre_estado, LA.usuario, LA.obs_laptop, LA.numserie_laptop
	FROM
	laptop LA, marca MA, sistema_operativo SO, memoria_ram MR, tecnologia_ram TR,
	discoduro DD, procesador PR, empresa EM, estado ES
	WHERE 
	LA.id_marca = MA.id_marca and LA.id_so = SO.id_so and 
	LA.id_memoriaram = MR.id_memoriaram and LA.id_tecnologiaram = TR.id_tecnologiaram and 
	LA.id_dd = DD.id_dd and LA.id_procesador = PR.id_procesador and 
	LA.id_empresa = EM.id_empresa and LA.id_estado = ES.id_estado and ES.nombre_estado = :estadoL ORDER BY LA.id_laptop ASC");
	$laptops->execute(array(':estadoL'=> $estadoL));
	$laptops = $laptops->fetchAll();
    }else{
    	$laptops = $conexion->prepare("SELECT 
	LA.id_laptop, MA.nombre_marca,LA.modelo_laptop, SO.nombre_so, MR.cantidad_ram,
	TR.nombre_tecnologiaram, DD.capacidad_dd, PR.nombre_procesador, EM.nombre_empresa, 
	ES.nombre_estado, LA.usuario, LA.obs_laptop, LA.numserie_laptop
	FROM
	laptop LA, marca MA, sistema_operativo SO, memoria_ram MR, tecnologia_ram TR,
	discoduro DD, procesador PR, empresa EM, estado ES
	WHERE 
	LA.id_marca = MA.id_marca and LA.id_so = SO.id_so and 
	LA.id_memoriaram = MR.id_memoriaram and LA.id_tecnologiaram = TR.id_tecnologiaram and 
	LA.id_dd = DD.id_dd and LA.id_procesador = PR.id_procesador and 
	LA.id_empresa = EM.id_empresa and LA.id_estado = ES.id_estado ORDER BY LA.id_laptop ASC");
	$laptops->execute();
	$laptops = $laptops->fetchAll();
    }
	


    require 'menu_nav.php';
    require 'view/datatable.view.php';
    
    die();
} else {
    // Enviamos al usuario al formulario de registro
    header('Location: login.php');
}
?>

