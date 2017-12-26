<?php 
include("conexion.php");

$opcion = $_GET['opcion'];
$id = $_GET['id'];
$grupo = $_GET['grupo'];



switch ($opcion) {
	case 1:
		$sql = "UPDATE usuarios SET privilegios='1' WHERE id_usuario='$id'";
		$ejecutar = $conexion->query($sql);
		if($ejecutar == true){
			echo '<script type="text/javascript" >
     		alert("privilegios cambiados con exito");
            window.location="panel.php";
           </script> ';
		}
		break;
	
	case 2:
		$sql = "UPDATE usuarios SET privilegios='2' WHERE id_usuario='$id'";
		$ejecutar = $conexion->query($sql);
		if($ejecutar == true){
			echo '<script type="text/javascript" >
     		alert("privilegios cambiados con exito");
            window.location="panel.php";
           </script> ';
		}
		break;

	case 3:
		
		$sql = "DELETE FROM conexiones_has_usuarios WHERE conexiones_id_conexion = '$grupo' AND usuarios_id_usuario = '$id'";
		$ejecutar = $conexion->query($sql);
			if($ejecutar == true){
			echo '<script type="text/javascript" >
     		alert("usuario eliminado con exito");
            window.location="panel.php";
           </script> ';
		}
		break;
}




 ?>