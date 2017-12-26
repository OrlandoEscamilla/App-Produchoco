<?php 
	include("conexion.php");

	$correo = $_POST['correo'];
	$id = $_POST['id'];


	$sql = "INSERT INTO correos (nombre_correo, usuarios_id_usuario) VALUES('$correo','$id')";
	$res = $conexion->query($sql);


	if($res == true){
	echo '<script type="text/javascript">
     		alert("Correo agregado");
            window.location="configuraciones.php";
           </script>';
	}
	else{
		echo "error";
	}






 ?>