<?php
include("conexion.php"); 
$nombre = $_POST['nombre_conexion'];
$descripcion = $_POST['descripcion'];
$id_usuario = $_POST['id_usuario'];





$sql = "INSERT INTO conexiones (nombre_conexion, descripcion_conexion) VALUES('$nombre', '$descripcion')";
$ejecutar = $conexion->query($sql);

$sql2 = "SELECT id_conexion FROM conexiones  WHERE nombre_conexion='$nombre' AND descripcion_conexion='$descripcion'";
$ejecutar2 = $conexion->query($sql2);
$consulta = $ejecutar2->fetch_assoc();
$id_conexion = $consulta['id_conexion'];


$sql3 = "INSERT INTO conexiones_has_usuarios (conexiones_id_conexion, usuarios_id_usuario) VALUES('$id_conexion', '$id_usuario')";
$ejecutar3 = $conexion->query($sql3);

if ($ejecutar3 == true) {

echo '<script type="text/javascript" >
     		alert("Conexion creada con exito");
            window.location="panel.php";
           </script>';
}
else{
		echo '<script type="text/javascript" >
     		alert("Conexion no creada, ocurrio un error");
            window.location="panel.php";
           </script>';
}



?>