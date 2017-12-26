<?php
include("conexion.php");
session_start();
if(isset($_SESSION['correo_user']) and  isset($_SESSION['pass_user'])){
	$email = $_SESSION['correo_user'];
	$contrasena = $_SESSION['pass_user'];

$sql = "SELECT * FROM usuarios WHERE correo = '$email' AND contrasena = '$contrasena'";
$res = $conexion->query($sql);
$usuario = $res->fetch_assoc();

$id_user = $usuario['id_usuario'];  /*<--------------------------VARIABLE QUE IDENTIFICA TODO-------------------------------*/
$permisos = $usuario['privilegios']; /*<--------------------------VARIABLE QUE IDENTIFICA LOS PERMISOS DE LOS USUARIOS-------------------------------*/
}
else{
header("Location: index.php");	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<script> 
function enviar_formulario(){ 
   document.formulario1.submit() 
} 
</script>
</head>

<body>
<div  class="contenedor_nueva_clase">
<h2>Nueva tarea</h2>
	
	<form id="formulario_asignados" action="insertar_tarea.php" method='post' name="formulario1">	
		<input type="text" name="nombre_tarea" placeholder="Nombre Tarea"><br>


		<select style="width:100%; margin-bottom:20px;" name="estado_tarea" placeholder="Estado" style="width: 100%; height: 50px; margin-bottom: 15px;" required>		

		<option value="" disabled selected>Selecciona un estado</option>
		
		<?php
			include("conexion.php");
			$sql = "SELECT nombre_label  FROM labels";				
			$respuesta = $conexion->query($sql);
			
				while ($label = $respuesta->fetch_assoc()) {?>		
				<option value="<?php echo $label['nombre_label'] ?>"><?php echo $label['nombre_label'] ?></option>			
				<?php
				}
				?>
		</select>





		<p><strong>Selecciona los usuarios asignados a esta tarea...</strong></p>

		<?php
			include("conexion.php");
			$id_conexion = $_GET['id'];
			$sql = "SELECT *  FROM usuarios WHERE id_usuario IN (SELECT usuarios_id_usuario FROM conexiones_has_usuarios WHERE conexiones_id_conexion = '$id_conexion')";				
			$ejecutar = $conexion->query($sql);
			
				while ($usuario = $ejecutar->fetch_assoc()) {?>		
				<p><input style="width: 15px; display: inline;" name="asignado[]" value="<?php echo $usuario['id_usuario']; ?>" type="checkbox" /><?php echo $usuario['nombre_usuario']." "; ?><?php echo $usuario['apellido_p']; ?></p>			
				<?php
				}
				?>





			

		<select style="width:100%; margin-bottom:20px;" name="id_proyecto" placeholder="Estado" style="width: 100%; height: 50px; margin-bottom: 15px;" required>		

		<option value="" disabled selected>Selecciona un proyecto</option>
		
		<?php
			include("conexion.php");
			$sql = "SELECT * FROM proyectos WHERE conexiones_id_conexion = '$id_conexion'";				
			$respuesta = $conexion->query($sql);
			
				while ($proyecto = $respuesta->fetch_assoc()) {?>		
				<option value="<?php echo $proyecto['id_proyectos']; ?>"><?php echo $proyecto['nombre_proyecto']; ?></option>			
				<?php
				}
				?>
		</select>

		<input type="hidden" name="id_usuario" value="<?php echo $id_user; ?>">
	


			
	</form>

<!--<button id="agregar" type="button" class="btn btn-primary">+ Agregar Usuario</span></button> -->
<br>
<a href="javascript:enviar_formulario()"><button style="width: 100%;" class="btn btn-success" >Crear Tarea</button></a>
</div>

</body>
<script src="js/jquery.js"></script>
<script src="agregar_asignados.js"></script>

</html>