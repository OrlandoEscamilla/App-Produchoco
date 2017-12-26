<?php
require('cox.php');
require('chat/sup_notificaciones.php');
require('chat/sup_chat.php');


include("conexion.php");
@session_start();
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
	<title>Tareas Chocolate Publicidad</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="chat/css/notificaciones.css">
	<link rel="stylesheet" type="text/css" href="chat/css/css.css">
	<link rel="stylesheet" type="text/css" href="chat/css/jquery.mCustomScrollbar.min.css">

	
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="chat/js/autosize.min.js"></script>
	<script type="text/javascript" src="chat/js/jquery.form.js"></script>
	<script type="text/javascript" src="chat/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="chat/notificaciones_chat.js"></script>

<script type="text/javascript">
	<?php 
	
$id_task ="";
	
if (!empty ($_GET['id_task'])){
$id_task = $_GET['id_task'];
}

	 ?>
		var id_para_tarea = "<?php echo $id_task; ?>";
		var last_id_rec = <?php echo ultimovisto($con); ?>;

		alert(id_para_tarea);
	</script>


	
</head>
<body>
	<header>	

<!----------------------------------------------------NOMBRE DE LA CONEXION------------------------------------------------------------------>
						<?php 				
							if(isset($_GET['nombrecon']) &&  !empty($_GET['nombrecon'])){						
								 $nombre_grupo = $_GET['nombrecon'];	

								 $sql = "SELECT  id_conexion FROM conexiones WHERE nombre_conexion ='$nombre_grupo' ";
								 $conexion_id = $conexion->query($sql);
								 $id_conexions = $conexion_id->fetch_assoc();
								 $id_conexion = $id_conexions['id_conexion']; 
							}

							else{							
								 $sql = "SELECT  id_conexion, nombre_conexion FROM conexiones WHERE id_conexion IN (SELECT conexiones_id_conexion FROM conexiones_has_usuarios WHERE usuarios_id_usuario = $id_user)";
								 $conexiones = $conexion->query($sql);
								 $grupo = $conexiones->fetch_assoc();							
								 $nombre_grupo = $grupo['nombre_conexion'];
								 $id_conexion = $grupo['id_conexion'];
							}
						
						?>
							<h3 id="nombre_conexion"><?php echo $nombre_grupo; ?></h3>
<!-------------------------------------------------------------------------------------------------------------------------------------------->								
								
		<!-- Single button -->
		<div class="btn-group">
  				<button  class="boton_conexion" style="background-color:#33638b; width: 49px; margin-top:-1px; border: none; border-radius:0px; border-right: solid 1px #2a4e6e;  border-left: solid 1px #2a4e6e; height:39px; color:#fff;" type="	  button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  					<span  class="icon-sitemap" style="margin-left: 0px !important; margin-right: 0px !important; font-size: 16px;"></span> <span class="icon-down-dir" style="margin-left: -10px !important; margin-right: 0px !important; font-size: 12px;"></span>
  				</button>

		  		<ul class="dropdown-menu">
<!----------------------------------------------------LISTA EL NUMERO CONEXIONES------------------------------------------------------------------>
		  				<?php 
		  					$consulta = "SELECT COUNT(*) FROM conexiones WHERE id_conexion IN (SELECT conexiones_id_conexion FROM conexiones_has_usuarios WHERE usuarios_id_usuario = $id_user);";
					$contador_conexiones = $conexion->query($consulta);
					$numero_conexiones = $contador_conexiones->fetch_assoc();
					$numero_conection = $numero_conexiones['COUNT(*)'];
		  				 ?>

						<p style="font-weight:bolder; text-align: center; ">Conexiones:(<?php echo $numero_conection; ?>)</p>
		    			<li role="separator" class="divider"></li>

<!----------------------------------------------------LISTA CON TODAS LAS CONEXIONES------------------------------------------------------------------>
		  				<?php 
							$sql = "SELECT nombre_conexion FROM conexiones WHERE id_conexion IN (SELECT conexiones_id_conexion FROM conexiones_has_usuarios WHERE usuarios_id_usuario = $id_user);";

							$conexiones = $conexion->query($sql);

							while ($grupo = $conexiones->fetch_assoc()) { ?>
									<li><a href="panel.php?nombrecon=<?php echo $grupo['nombre_conexion'];?>"><?php echo $grupo['nombre_conexion']?></a></li>
						<?php 
							}

						 ?>
<!---------------------------------------------------------------------------------------------------------------------------------------------------->
		    			

		    			<li role="separator" class="divider"></li>
		    			<a href="#"> <button style="width:160px; background-color:#5ca77c; margin-left: 10px; margin-right:10px; height:20px; padding:5px; padding-top:1px; font-size: 12px;" type="button" class="btn btn-success"  aria-expanded="false" data-toggle="modal" data-target="#nueva_conexion">Nueva conexion</span>

		    			
  						</button></a>
		  		</ul>
		</div>

		<input  id="buscar_tareas" type="text" name="bucar_tareas" placeholder="Buscar tarea..." class="buscar">


		<!-- Single button -->
		<div class="btn-group a">
  				<button class="boton_usuario" style="font-family: helvetica; font-weight: bolder; border:none; border-right:solid 1px #444c54; border-left:solid 1px #444c54; background-color:#33638b; color: #fff; border-radius: 0px; height: 39px; margin-top: -2px; padding-left: 10px; padding-right: 35px; padding-top:1px; " type="button" class="btn btn-default 		dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img_perfil" src="<?php echo $usuario['foto'];  ?>"><?php echo $usuario['nombre_usuario']." "; echo $usuario['apellido_p'];  ?><span class="caret"></span>
  				</button>
				  <ul class="dropdown-menu">
					    <li><a href="configuraciones.php"><span style="margin-right: 8px; margin-left: -9px; font-size: 12px;" class="glyphicon glyphicon-cog" aria-hidden="false"></span>Configuración</a></li>
					    <li><a href="#"><span style="margin-right: 8px; margin-left: -9px; font-size: 12px;" class="glyphicon glyphicon-list-alt" aria-hidden="false"></span>Guia de usuario</a></li>
					 <!--   <li><a href="#"><span style="margin-right: 8px; margin-left: -9px; font-size: 12px;" class="glyphicon glyphicon-tags" aria-hidden="false"></span>Notificaciones</a></li>
					    <li role="separator" class="divider"></li> -->
					    <li><a href="cerrar_sesion.php"><span style="margin-right: 8px; margin-left: -9px; font-size: 12px;" class="glyphicon glyphicon-off" aria-hidden="false"></span>Cerrar sesion</a></li>
				  </ul>
		</div>
			
		<!-- <div class="notificaciones"><p>0</p></div> -->

	</header>


  <!-- Modal -->
  <div class="modal fade" id="nueva_conexion" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nueva Conexion</h4>
        </div>
        <div class="modal-body">
          <form action="nueva_conexion.php" method="post">
          	<input type="text" name="nombre_conexion" placeholder="Nombre de la conexion" required>
          	<input type="text" name="descripcion" placeholder="Descripcion de la conexion" required>
      	<input type="hidden" name="id_usuario" value="<?php echo $id_user; ?>">

          	
          	<input style="width:130px; float: right;" type="submit" name="" value="Crear proyecto"  class="btn btn-success">
          </form>
           <button style="width:130px; height: 40px; float: right; margin-right: 10px;" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
        <div style="border: none;" class="modal-footer">
         
        </div>
      </div>
      
    </div>
    </div>







 <!-- Modal -->
  <div class="modal fade" id="nuevo_usuario" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo usuario</h4>
        </div>
        <div class="modal-body">

       <form action="insertar_usuario.php" method="post">
          	<input type="text" name="nombre_usuario" placeholder="Nombre usuario" required>
          	<input type="text" name="apellido_paterno" placeholder="Apellido paterno" required>
          	<input type="text" name="apellido_materno" placeholder="Apellido materno" required>
          	
          	<select name="privilegio">
			
			  <option value="1">usuario administrador</option>
			  <option value="2">usuario default</option>
			</select>
          	<input type="text" name="cargo" placeholder="Cargo" required>
          	<input type="text" name="correo" placeholder="Correo" required>
          	<input type="text" name="contrasena" placeholder="Contraseña" required>
          
<!---------------------------------------------------------------------------------------->
<?php 
$sql = "SELECT id_conexion FROM conexiones WHERE nombre_conexion = '$nombre_grupo'";
$ejec = $conexion->query($sql);
$result = $ejec->fetch_assoc();
$id_grupo = $result['id_conexion'];
 ?>
 <!---------------------------------------------------------------------------------------->         	
          	<input type="hidden" name="conexion" value="<?php echo $id_grupo; ?>">
          	<input style="width:130px; float: right;" type="submit" name="" value="Crear usuario"  class="btn btn-success">
          </form>
            <button style="width:130px; height: 40px; float: right; margin-right: 10px;" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
        <div style="border: none;" class="modal-footer">
         
        </div>
      </div>
      
    </div>
    </div>





  <!-- Modal -->
  <div class="modal fade" id="nuevo_proyecto" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo Proyecto</h4>
        </div>
        <div class="modal-body">
          <form action="insertar_proyecto.php" method="post">
          	<input type="text" name="nombre_proyecto" placeholder="Nombre del proyecto" required>
          	<input type="text" name="descripcion" placeholder="Descripcion" required>
<!---------------------------------------------------------------------------------------->
<?php 
$sql = "SELECT id_conexion FROM conexiones WHERE nombre_conexion = '$nombre_grupo'";
$ejec = $conexion->query($sql);
$result = $ejec->fetch_assoc();
$id_grupo = $result['id_conexion'];
?>
<!---------------------------------------------------------------------------------------->       	

          	<input type="hidden" name="conexion" value="<?php echo $id_grupo; ?>">
          	<input style="width:130px; float: right;" type="submit" name="" value="Crear proyecto"  class="btn btn-success">
          </form>
           <button style="width:130px; height: 40px; float: right; margin-right: 10px;" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
        <div style="border: none;" class="modal-footer">
         
        </div>
      </div>
      
    </div>
    </div>




<!-- Modal -->
  <div class="modal fade" id="nuevo_label" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo label</h4>
        </div>
        <div class="modal-body">
                <form action="insertar_label.php" method="post">
          	<input type="text" name="nombre_label" placeholder="Nombre del label" required>
          	<input type="text" name="color" placeholder="Descripcion" required>
     	
          	<input style="width:130px; float: right;" type="submit" name="" value="Crear proyecto"  class="btn btn-success">
          </form>
            <button style="width:130px; height: 40px; float: right; margin-right: 10px;" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
       <div style="border: none;" class="modal-footer">
          
        </div>
      </div>
      
    </div>
    </div>







<!-----------------------------------------------------MUESTRA EL NUMERO DE LOS USUARIOS DE LA CONEXION---------------------------------------------------->
    			<?php  
    				$consulta = "SELECT COUNT(*) FROM usuarios WHERE id_usuario IN ( SELECT usuarios_id_usuario FROM conexiones_has_usuarios WHERE conexiones_id_conexion IN (SELECT id_conexion FROM conexiones WHERE nombre_conexion = '$nombre_grupo'))";
					$contador_usuarios = $conexion->query($consulta);
					$numero_usuarios = $contador_usuarios->fetch_assoc();
					$numero_users = $numero_usuarios['COUNT(*)'];
				?>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->


	<section id="panel_izquierdo">
	<div class="titulo"><h5>People <span>(<?php echo $numero_users; ?>)</span></h5>  
	<?php 

		if($permisos == 1){ ?>
				<div class="nuevo" data-toggle="modal" data-target="#nuevo_usuario"><span class="icon-plus"></span></div>
	<?php  
		}
		else{
    ?>
    	<div class="nuevo"><span class="icon-plus"></span></div>

     <?php
		}
	 ?>
	 <div class="search"><span class="icon-search"></span></div></div>
		<article>		

<!-----------------------------------------------------MUESTRA TODOS LOS USUARIOS DE LA CONEXION---------------------------------------------------->

						<?php
							
							$sql = "SELECT * FROM usuarios WHERE id_usuario IN ( 
														SELECT usuarios_id_usuario FROM conexiones_has_usuarios WHERE conexiones_id_conexion IN 
														(SELECT id_conexion FROM conexiones WHERE nombre_conexion = '$nombre_grupo'))";

							$usuarios = $conexion->query($sql);

							while ($usuario = $usuarios->fetch_assoc()){ ?>
								<a style="color:#fff;" href="tareas_usuario.php?id=<?php echo $usuario['id_usuario']; ?>"><p class="proyectos"><img class="img" src="<?php echo $usuario['foto']; ?>"><?php echo $usuario['nombre_usuario']." "; echo $usuario['apellido_p'];  ?>
								<?php  if($permisos == 1){ ?> 								
			<a style="color: #949aa2;" href="configuracion_usuarios.php?var=<?php echo $usuario['id_usuario'] ?> & var2=<?php echo $usuario['privilegios'];?> & var3=<?php echo $id_conexion; ?>"><span class="settings glyphicon glyphicon-cog dropdown-toggle" ></span></a></p></a>
									<?php  
									}else{

									}    

									?> 
						<?php 
							}

						 ?>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->

			
		</article>












<!-----------------------------------------------------MUESTRA EL NUMERO DE PROYECTOS DE LA CONEXION---------------------------------------------------->
    			<?php  
    				$consulta = "SELECT COUNT(*) FROM proyectos WHERE conexiones_id_conexion IN (SELECT id_conexion FROM conexiones WHERE nombre_conexion = '$nombre_grupo' )";
					$contador_proyectos = $conexion->query($consulta);
					$numero_proyectos = $contador_proyectos->fetch_assoc();
					$numero_proyects = $numero_proyectos['COUNT(*)'];
				?>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->


	<div class="titulo"><h5>My Projects <span>(<?php echo $numero_proyects; ?>)</span></h5>

	<?php 

		if($permisos == 1){ ?>
			<div class="nuevo" data-toggle="modal" data-target="#nuevo_proyecto"><span  class="icon-plus"></span></div>
	<?php  
		}
		else{
    ?>
    	<div class="nuevo"><span class="icon-plus"></span></div>

     <?php
		}
	 ?>

       <div class="search"><span class="icon-search"></span></div></div>
		<article>		

	
<!-----------------------------------------------------MUESTRA TODOS LOS PROYECTOS DE LA CONEXION---------------------------------------------------->
						<?php 
							$sql = "SELECT id_proyectos, nombre_proyecto FROM proyectos WHERE conexiones_id_conexion IN (SELECT id_conexion FROM conexiones WHERE nombre_conexion = '$nombre_grupo' )";



							$proyectos = $conexion->query($sql);

							while ($proyecto = $proyectos->fetch_assoc()) { ?>
								<a style="color: #fff;" href="tareas_proyecto.php?id=<?php echo $proyecto['id_proyectos']; ?>"><p class="proyectos"><span class="icon-book"></span><?php echo $proyecto['nombre_proyecto']; ?></p></a>
						<?php 
							}

						 ?>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->
						
		</article>












	<!-----------------------------------------------------MUESTRA EL NUMERO DE LABELS DE LA CONEXION---------------------------------------------------->
    			<?php  
    				$consulta = "SELECT COUNT(*) FROM labels";
					$contador_labels = $conexion->query($consulta);
					$numero_labels = $contador_labels->fetch_assoc();
					$numero_label = $numero_labels['COUNT(*)'];
				?>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->

	<div class="titulo"><h5>Labels <span>(<?php echo $numero_label; ?>)</span></h5> 

		<?php 

		if($permisos == 1){ ?>
			<div class="nuevo" data-toggle="modal" data-target="#nuevo_label"><span class="icon-plus"></div>
	<?php  
		}
		else{
    ?>
    	<div class="nuevo"><span class="icon-plus"></div>

     <?php
		}
	 ?>
	<div class="search"><span class="icon-search"></span></div></div>
		<article>				


<!-----------------------------------------------------MUESTRA TODOS LOS LABELS---------------------------------------------------->
						<?php 
							$sql = "SELECT nombre_label FROM labels;";

							$labels = $conexion->query($sql);

							while ($label = $labels->fetch_assoc()) { ?>
								<p class="proyectos"><img style="width: 17px;  margin-right: 10px;" src="img/tag.png"><?php echo $label['nombre_label'] ?></p>
						<?php 
							}

						 ?>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->
		
		</article>

	</section>

<div class="contenedor_tabla_conversacion">
	<section class="panel_derecho">
		<div class="panel panel-default">

			<?php  if($permisos == 1){ ?>
  			<div class="panel-heading"><a href="nueva_clase.php?id=<?php echo $id_grupo ?>"><button style="height: 25px; font-size:13px; padding-top: 3px;" type="button" class="btn btn-success" aria-expanded="false"  >+ Nueva Tarea</span></button></a></div>
  			<?php }else{ ?>

  			 	<div class="panel-heading">Tareas</div>
  			<?php } ?>



 			 <!-- Table -->
  <table  class="table" >
  <thead>
      <tr>
      	<th>Id</th>
        <th>Nombre Tarea</th>
        <th>Estado</th>      
        <th>Asignados</th>
        <th>Proyecto</th>

        <?php  
		    if($permisos == 1){ ?>
				<th>Editar</th>
        		<th>Eliminar</th>
		<?php  
			}
			else{
			}
   		 ?>

      </tr>
    </thead>
    <tbody>
    
    <?php 
    	$id_usuario_get = $_GET['id'];
    	$sql = "SELECT * FROM tareas WHERE id_tarea IN (SELECT tareas_id_tarea FROM usuarios_has_tareas WHERE usuarios_id_usuario = '$id_usuario_get')";

    	$ejecutar = $conexion->query($sql);

    	while ($tarea = $ejecutar->fetch_assoc()) { 
    		$id_tareas = $tarea['id_tarea'];

    		?>
    		<tr>
			<td><?php echo $tarea['id_tarea']; ?></td>
			<td><a href="tareas_usuario.php?id=<?php echo $id_usuario_get ?>&id_task=<?php echo $id_tareas; ?>"><?php echo $tarea['nombre_tarea']; ?></a></td>
			<td><?php echo $tarea['labels']; ?></td>
			<td>
				<?php 
				$sql2 = "SELECT foto FROM usuarios WHERE id_usuario IN (SELECT usuarios_id_usuario FROM usuarios_has_tareas WHERE tareas_id_tarea = '$id_tareas')";
				$ejecutar2 = $conexion->query($sql2);
				while ($usuarios = $ejecutar2->fetch_assoc()) { ?>
    				<img class="img" src="<?php echo $usuarios['foto']; ?>">
    			<?php 
    				}
    			 ?>
    		</td>
 				
			
    		<?php 
				$sql3 = "SELECT nombre_proyecto FROM proyectos WHERE id_proyectos IN (SELECT proyectos_id_proyectos FROM tareas WHERE id_tarea = '$id_tareas')";
				$ejecutar3 = $conexion->query($sql3);
				while ($nombre = $ejecutar3->fetch_assoc()) { ?>
    				<td><?php echo $nombre['nombre_proyecto']; ?></td>	
    			<?php 
    				}
    			 ?>



    			  <?php  
		    if($permisos == 1){ ?>
				 <td><a href="editar_tarea.php"><button style="height: 28px;" type="button" class="btn btn-primary">Editar</button></a></td>
    			 <td><a href="eliminar_tarea.php?id=<?php echo $id_tareas; ?>"><button style="height: 28px;" type="button" class="btn btn-danger">Eliminar</button></a></td>
		<?php  
			}
			else{
			}
   		 ?>






			 </tr>
		<?php 
			}

		 ?>
     
  
    </tbody>
  </table>
</div>

	</section>

	<section class="conversacion">
<!-- Lugar donde aparecera chat -->
	<?php /* actual_chat(conexion, id tarea, id usuario) */ echo actual_chat($con, $id_task, 10, $variable_usuario); ?>
<!-- Lugar donde aparecera chat -->

	</section>

	</div>

	
	<script src="js/bootstrap.min.js"></script>
</body>
</html>