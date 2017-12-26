<?php 
include("conexion.php");

$imagen = 'default.jpg';

$id_usuario = $_POST['id'];
$correo = $_POST['email'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$puesto = $_POST['puesto'];
$imagen = $_FILES['imagen']['name'];

if($imagen == ""){
	$sql = "UPDATE usuarios SET nombre_usuario='$nombre', apellido_p='$apellido', cargo='$puesto', correo='$correo' WHERE id_usuario='$id_usuario'";
}
else{
$carpeta = 'img/img_usuarios/';
$fichero_subido = $carpeta . basename($_FILES['imagen']['name']);
move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido);

$sql = "UPDATE usuarios SET nombre_usuario='$nombre', apellido_p='$apellido', cargo='$puesto', correo='$correo', foto='$fichero_subido' WHERE id_usuario='$id_usuario'";
}

if ($conexion->query($sql) === TRUE) {
     echo '<script type="text/javascript" >
     		alert("Informacion actualizada con exito");
            window.location="configuraciones.php";
           </script> ';
} else {
    echo "Error updating record: " . $conexion->error;
}
 ?>