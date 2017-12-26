<?php 
include("conexion.php");
$nombre = $_POST['nombre_proyecto']; 
$descripcion = $_POST['descripcion']; 
$cualconexion = $_POST['conexion'];



$sql = "INSERT INTO proyectos (nombre_proyecto , descripcion_proyecto , conexiones_id_conexion) VALUES('$nombre', '$descripcion', '$cualconexion')";
$ejecutar = $conexion->query($sql);

if ($ejecutar == true) {

	echo '<script type="text/javascript" >
     		alert("Proyecto creado con exito");
            window.location="panel.php";
           </script>';
}
else{
		echo '<script type="text/javascript" >
     		alert("Proyecto no creado ocurrio un error");
            window.location="panel.php";
           </script>';
}

?>