<?php 
include("conexion.php");

$id_usuario = $_POST['id'];
$contrasena = $_POST['contrasena_actual'];
$nueva_contrasena = $_POST['nueva_contrasena'];
$nueva_contrasena2 = $_POST['nueva_contrasena2'];

if($nueva_contrasena == ""){
	$nueva_contrasena = 'kajhhiduxwx'; 
}

$sql = "SELECT contrasena FROM usuarios WHERE id_usuario='$id_usuario' AND contrasena='$contrasena'";
$var = $conexion->query($sql);
$usuario = $var->fetch_assoc();

if($usuario != ""){

	if($nueva_contrasena == $nueva_contrasena2){
		$sql2 = "UPDATE usuarios SET contrasena='$nueva_contrasena' WHERE id_usuario='$id_usuario'";
		$conexion->query($sql2);
		echo '<script type="text/javascript" >
     		alert("Contrasena actualizada con exito");
            window.location="cerrar_sesion.php";
           </script>';
	}
	else{
		echo '<script type="text/javascript">
     		alert("Las nuevas contrasenas no coinciden");
            window.location="configuraciones.php";
           </script>';

	}
}



else{
	echo '<script type="text/javascript" >
     		alert("contrasena actual incorrecta");
            window.location="configuraciones.php";
           </script> ';
}

 ?>