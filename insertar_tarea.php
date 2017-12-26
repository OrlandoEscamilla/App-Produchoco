<?php 
include("conexion.php");
$id_proyecto = $_POST['id_proyecto'];
$nombre_tarea = $_POST['nombre_tarea'];
$estado_tarea = $_POST['estado_tarea'];
$asignados = $_POST['asignado'];
$id_userlogueado = $_POST['id_usuario'];

/*
echo $id_proyecto;
echo $nombre_tarea;
echo $estado_tarea;

foreach ($asignados as $a) 
{
  echo $a;
}
*/


$sql = "INSERT INTO tareas (nombre_tarea , labels , proyectos_id_proyectos) VALUES ('$nombre_tarea', '$estado_tarea', '$id_proyecto')";
$insertar = $conexion->query($sql);

$sql2 = "SELECT id_tarea FROM tareas WHERE nombre_tarea = '$nombre_tarea' AND labels = '$estado_tarea' AND proyectos_id_proyectos = '$id_proyecto'";
$obtenerid = $conexion->query($sql2);
$id = $obtenerid->fetch_assoc();
$id_tarea = $id['id_tarea'];



foreach ($asignados as $a) 
{
	$id_usuario = $a;
	$sql3 = "INSERT INTO usuarios_has_tareas (usuarios_id_usuario, tareas_id_tarea)VALUES('$id_usuario', '$id_tarea')";
	$ejecutar = $conexion->query($sql3);
}

if($ejecutar == true){

	$consulta = "INSERT INTO chat_mensajes (id, id_tarea, id_remitente, tipo, mensaje, fecha, extra) VALUES (NULL, '$id_tarea', '$id_userlogueado', '1', 'Nueva conversacion iniciada, esperando mensajes', '2017-08-20 00:00:00', '')";
		$ejecutar = $conexion->query($consulta);



		echo '<script type="text/javascript" >
     		alert("Tarea creada con exito");
            window.location="panel.php";
           </script>';          
}
else{
		echo '<script type="text/javascript" >
     		alert("Tarea no creada ");
            
           </script>';
}


 ?>