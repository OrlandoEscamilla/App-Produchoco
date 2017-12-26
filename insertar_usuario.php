<?php 
include("conexion.php");
$nombre = $_POST['nombre_usuario']; 
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno']; 
$privilegio = $_POST['privilegio'];
$cargo = $_POST['cargo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$grupo = $_POST['conexion'];

echo $nombre; 
echo $apellido_paterno;
echo $apellido_materno;
echo $privilegio;
echo $cargo;
echo $correo;
echo $contrasena;

$sql = "INSERT INTO usuarios (nombre_usuario , apellido_p , apellido_m , privilegios , cargo, correo, contrasena) VALUES('$nombre', '$apellido_paterno', '$apellido_materno', '$privilegio', '$cargo', '$correo', '$contrasena')";
$ejecutar = $conexion->query($sql);


$sql2 = "SELECT id_usuario FROM usuarios  WHERE nombre_usuario='$nombre' AND apellido_p='$apellido_paterno' AND apellido_m = '$apellido_materno' AND privilegios='$privilegio' AND cargo='$cargo' AND correo='$correo' AND contrasena='$contrasena'";
$ejecutar2 = $conexion->query($sql2);
$consulta = $ejecutar2->fetch_assoc();
$id_usuario = $consulta['id_usuario'];

echo $id_usuario;

if ($ejecutar2 == true) {
	echo "ejecutar 2 con exito";
	}

	else{
echo "ejecutar 2 sin exito";
	}


$sql3 = "INSERT INTO conexiones_has_usuarios (conexiones_id_conexion , usuarios_id_usuario) VALUES('$grupo','$id_usuario')";
$ejecutar3 = $conexion->query($sql3);


if ($ejecutar3 == true) {
	echo "Usuario creado con exito";
/*
	echo '<script type="text/javascript" >
     		alert("Usuario creado con exito");
            window.location="panel.php";
           </script>';
           */
}
else{
	/*
		echo '<script type="text/javascript" >
     		alert("Usuario no creado, ocurrio un error");
            window.location="panel.php";
           </script>';
           */
           echo "Usuario no creado con exito";
}


?>