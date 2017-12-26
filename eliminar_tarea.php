
<?php 
include("conexion.php");
$id_tarea = $_REQUEST['id'];


$sql = "DELETE FROM usuarios_has_tareas WHERE tareas_id_tarea = '$id_tarea'";
$ejecutar = $conexion->query($sql);

if($ejecutar){
$sql2 = "DELETE FROM tareas WHERE id_tarea = '$id_tarea'";
$ejecutar2 = $conexion->query($sql2);

if($ejecutar2){
	echo '<script type="text/javascript" >
     		alert("Tarea eliminada con exito");
            window.location="panel.php";
           </script>';
}
else{
	echo "Eliminacion no exitosa";
}

}
else{
	echo "tareas_has_usuarios no elimiinados con exito";
}








 ?>