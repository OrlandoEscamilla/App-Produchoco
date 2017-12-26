<?php 
include("conexion.php");


$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
$res = $conexion->query($sql);

if($comprobar = mysqli_fetch_array($res)){
	session_start();
	$_SESSION['correo_user'] = $correo;
	$_SESSION['pass_user'] = $contrasena;
	$_SESSION['id_userr'] = $comprobar['id_usuario'];



	header("Location: panel.php"); 
}

else{
	echo "son erroneos tus datos";
}



 ?>