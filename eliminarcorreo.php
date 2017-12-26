<?php 

include_once('conexion.php');

$nombre_correo = $_REQUEST['nombre_correo'];



$sql = "DELETE FROM correos WHERE nombre_correo = '$nombre_correo'";
$respuesta = $conexion->query($sql);



if($respuesta){
	header("Location: configuraciones.php");
}
else{
	echo "Eliminacion no exitosa";
}

?>