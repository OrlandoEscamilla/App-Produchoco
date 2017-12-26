<?php 
include("conexion.php");
$nombre = $_POST['nombre_label']; 
$color = $_POST['color']; 




$sql = "INSERT INTO labels (nombre_label, color_label) VALUES('$nombre', '$color')";
$ejecutar = $conexion->query($sql);

if ($ejecutar == true) {

	echo '<script type="text/javascript" >
     		alert("label creado con exito");
            window.location="panel.php";
           </script>';
}
else{
		echo '<script type="text/javascript" >
     		alert("label no creado, ocurrio un error");
            window.location="panel.php";
           </script>';
}




 ?>