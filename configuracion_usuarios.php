<?php 

$id = $_GET['var'];
$privilegios = $_GET['var2'];
$grupo = $_GET['var3'];

echo $id;
echo $privilegios;
echo $grupo;



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Produchoco</title>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
 <style type="text/css">
 *{
 	box-sizing: border-box;
 }
 	.container_edituser{
 		background-color: #fff;
 		width: 250px;
 		height: 250px;
 		margin: 0 auto;
 		border-radius: 5px;
 		border: solid 1px #dddbdb;

-webkit-box-shadow: 0px 1px 32px -13px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 1px 32px -13px rgba(0,0,0,0.75);
box-shadow: 0px 1px 32px -13px rgba(0,0,0,0.75);
 	}

 	.container_edituser .als{
 		padding-left: 15px;
 		font-family: helvetica;
 		font-size: 15px;
 	}

 	.container_titulo{
 		background-color: #efecec;
 		width: 100%;
 		height: 40px;
 		padding-top: 1px;
 		padding-left: 15px;
 	}

 	.container_titulo p{
 		font-family: helvetica;
 		font-weight: bold;
 		font-size: 15px;
 		margin-top: 12px;
 	}

 	.opciones{
 		color: #0088cc;
 		text-decoration: none;
 	}


 </style>
 		<div class="container_edituser">
 		<div class="container_titulo">
 			<p>Editar Usuario</p>
 		</div>

 		<?php 
 			if($privilegios == 2){  ?>
 			<br>
 				<p class="als"><a  class="opciones" href="cambiar_restricciones.php?opcion=1 & id=<?php echo $id; ?>"><span style="margin-right: 10px;" class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>Cambiar a administrador</a></p>
 			<?php  
 			}
 			else{ ?>
 			<br>
 				 <p class="als"><a class="opciones" href="cambiar_restricciones.php?opcion=2 & id=<?php echo $id; ?>"><span style="margin-right: 10px;" class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>Usuario por default</a></p>
 			<?php
 			}
 		 ?>
 		
 		<p class="als"><a class="opciones" href="cambiar_restricciones.php?opcion=3 &  id=<?php echo $id; ?> & grupo=<?php echo $grupo; ?> "><span  style="margin-right: 10px;" class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar de la conexion</a></p>
 			
 		</div>
 </body>
 </html>