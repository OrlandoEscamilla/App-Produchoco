<?php 
include("conexion.php");
session_start();
if(isset($_SESSION['correo_user']) and  isset($_SESSION['pass_user'])){
	$email = $_SESSION['correo_user'];
	$contrasena = $_SESSION['pass_user'];

	$sql = "SELECT * FROM usuarios WHERE correo = '$email' AND contrasena = '$contrasena'";
	$res = $conexion->query($sql);
	$usuario = $res->fetch_assoc();

	$id_usuario = $usuario['id_usuario'];
}

else{
header("Location: index.php");	
}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Tareas Chocolate Publicidad</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-color:#fff;">
	<header>		
		<h3 id="nombre_conexion"><a style="color:#fff;" href="panel.php">Configuracion</h3></a>

		<!-- Single button -->
		<div class="btn-group a">
  				<button class="boton_usuario" style="font-family: helvetica; font-weight: bolder; border:none; border-right:solid 1px #444c54; border-left:solid 1px #444c54; background-color:#33638b; color: #fff; border-radius: 0px; height: 39px; margin-top: -2px; padding-left: 10px; padding-right: 35px; padding-top:1px; " type="button" class="btn btn-default 		dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img_perfil" src="<?php echo $usuario['foto'];  ?>"><?php echo $usuario['nombre_usuario']." "; echo $usuario['apellido_p'];  ?><span class="caret"></span>
  				</button>
				  <ul class="dropdown-menu">
					    <li><a href="#"><span style="margin-right: 8px; margin-left: -9px; font-size: 12px;" class="glyphicon glyphicon-cog" aria-hidden="false"></span>Configuración</a></li>
					    <li><a href="#"><span style="margin-right: 8px; margin-left: -9px; font-size: 12px;" class="glyphicon glyphicon-list-alt" aria-hidden="false"></span>Guia de usuario</a></li>
					   
					   <!-- <li><a href="#"><span style="margin-right: 8px; margin-left: -9px; font-size: 12px;" class="glyphicon glyphicon-tags" aria-hidden="false"></span>Notificaciones</a></li>
					    <li role="separator" class="divider"></li> -->
					    <li><a href="cerrar_sesion.php"><span style="margin-right: 8px; margin-left: -9px; font-size: 12px;" class="glyphicon glyphicon-off" aria-hidden="false"></span>Cerrar sesion</a></li>
				  </ul>
		</div>
			
			<nav>
				<ul>
					<li id="uno" class="activo">Editar perfil</li>
					<li id="dos">Cambiar contraseña</li>
					<li id="tres">Correos</li>
				<!--	<li id="cuatro">configurar notificaciones</li> -->
					<li id="cinco" style="border-right: solid 1px #444963;">Exportación</li>
				</ul>
			</nav>
	</header>
	

	<div class="contenedor_cambiante">


		<div class="contenedor_configuracion">
			<div class="titulo_editar_perfil">
				<p>Editar Perfil</p>
			</div>
			<form action="editar_perfil.php" method="post" enctype="multipart/form-data">
				<div class="avatar">
					<img src="<?php echo $usuario['foto']; ?>">
				</div>


				<div style="width:100%; height:50px; margin-bottom:50px; margin-top:20px; position:relative; text-align: center;">
				<p style="color:#9b9b91; font-size: 12px;" >Tipo de imagen (.jpg, .png, .gif). Tamaño máximo del archivo: 3MB.</p>
				<button  style="background-color:#e6e6e6;"  type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cambiar imagen<span class="caret"></span>


  				</button>
  				<ul style="position: absolute; top:60px; left:160px;" class="dropdown-menu">
    				<li><p style="font-weight:bold; padding-left:10px;">Cargar nueva imagen</p>
    				<input id="imagen_usuario" style="border:none;" type="file" name="imagen"></li>
    				 <li role="separator" class="divider"></li>			
    				<li><a href="#">Remover imagen</a></li>
  				</ul>
  				</div>




  			

					

				<label >Email:</label>
				<input type="text" placeholder="Email" name="email" value="<?php echo $usuario['correo'] ?>">
				<label >Nombre:</label>
				<input type="text" placeholder="Nombre" name="nombre" value="<?php echo $usuario['nombre_usuario'] ?>">
				<label >Apellido:</label>
				<input type="text" placeholder="Apellido" name="apellido" value="<?php echo $usuario['apellido_p'] ?>">
				<label >Puesto de Trabajo:</label>
				<input type="text" placeholder="Puesto de Trabajo" name="puesto" value="<?php echo $usuario['cargo'] ?>">
				<input type="hidden" name="id" value="<?php echo $usuario['id_usuario'] ?>">
				<input id="boton_perfil"  type="submit" value="Guardar cambios" >		
			</form>
		</div>



		<div class="contenedor_configuracion2">
			<div class="titulo_editar_perfil">
				<p>Cambiar Contraseña</p>
			</div>
		<form action="cambiar_contrasena.php" method="post">

			<label >Contraseña Actual:</label>
			<input type="password" placeholder="Contraseña Actual" name="contrasena_actual">
			<label >Nueva Contraseña:</label>
			<input type="password" placeholder="Nueva Contraseña" name="nueva_contrasena">
			<label >Repetir Contraseña:</label>
			<input type="password" placeholder="Repetir Contraseña" name="nueva_contrasena2">
			<input type="hidden" name="id" value="<?php echo $usuario['id_usuario'] ?>">
			<input id="boton_perfil" type="submit" value="Cambiar contraseña">
			
		</form>
		</div>


		<div class="contenedor_configuracion3">
		<div class="titulo_editar_perfil">

			<p>Añadir Correo</p>
			<p id="aviso">Puede conectar esta aplicacion a diferentes direcciones de correo electrónico y direcciones de mensajería instantánea. Una vez que una dirección está conectada, puede utilizarla para obtener notificaciones, así como para crear tareas.</p>
		</div>
		<form id="campos" method="post" action="insertar_correo.php">
			<p><span style="font-weight: bold;">Correo master: </span> <?php echo $usuario['correo'] ?></p>

			
			
			<?php 
				include("conexion.php");
				
				$sql = "SELECT nombre_correo FROM correos WHERE usuarios_id_usuario='$id_usuario'";
				$resultado = $conexion->query($sql);
				
				while ($correos = $resultado->fetch_assoc()) { ?>
					
<p><span style="font-weight: bold;">Correos extra de notificaciones: </span> <span class="correo_noti"> <?php echo $correos['nombre_correo'] ?><a href="eliminarcorreo.php?nombre_correo=<?php echo $correos['nombre_correo'] ?>"><img class="img_tacha" src="img/tacha.png"></a></span></p> 


				<?php

				}
				
				?>
			 
					

					


			
					
			




			<br>
			<label >Nuevo Correo:</label>
			<input type="email" name="correo" placeholder="correo@example.com">
			<input type="hidden" name="id" value="<?php echo $usuario['id_usuario'] ?>">
			<input id="boton_perfil" type="submit"  value="Añadir correo">
		</form>
		</div>



	<div class="contenedor_configuracion4">
	<div class="titulo_editar_perfil">
		<p>Configuracion de Notificaciones</p>
		<p id="aviso">Defina los eventos sobre los que se ha notificado acerca de esta aplicacin, las notificaciones que recibirá en su correo electrónico o mensajería instantánea y las notificaciones push que deben enviarse a su dispositivo móvil. Puede agregar direcciones de correo electrónico o de correo electrónico adicionales en la sección de correos electrónicos.</p>
	</div>
		<form action="">
			<label >Nuevo Correo:</label>
			<input type="password" placeholder="correo@example.com">
			<input id="boton_perfil" type="submit" value="Añadir correo">
		</form>
	</div>



	<div class="contenedor_configuracion5">
	<div class="titulo_editar_perfil">
		<p>Exportar datos de Producteevs</p>
		<p id="aviso">Exporta todas tus tareas
		Después de iniciar el proceso de exportación, prepararemos un único archivo de datos que contenga todas las tareas, tanto activas como completas. Este archivo se descargará al finalizar.</p>
	</div>
		<form action="">
			<input id="boton_perfil" type="submit" value="Comenzar Exportación">
		</form>
	</div>


</div>
		


	

	<script src="js/jquery.js"></script>
	<script src="js/eventos.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>