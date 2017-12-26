<?php
//requisito
require('cox.php');
require('chat/sup_notificaciones.php');
require('chat/sup_chat.php');
?>
<!DOCTYPE html>
<html>
<head>
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<title>Notificaciones</title>
	<!-- Requisitos para Chat -->
	<link rel="stylesheet" type="text/css" href="chat/css/notificaciones.css">
	<link rel="stylesheet" type="text/css" href="chat/css/css.css">
	<script type="text/javascript" src="chat/js/autosize.min.js"></script>
	<script type="text/javascript" src="chat/js/jquery.form.js"></script>
	<script type="text/javascript" src="chat/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<link rel="stylesheet" type="text/css" href="chat/css/jquery.mCustomScrollbar.min.css">
	<script type="text/javascript">
		var id_para_tarea = "1";
		var last_id_rec = <?php echo ultimovisto($con); ?>;
	</script>
	<script type="text/javascript" src="chat/notificaciones_chat.js"></script>
	<!-- Requisitos para Chat -->

</head>
<body>

<!-- Div notifiaciones -->
<div id="div_icono_notificaciones" class="div_icono">
	<div class="burbuja">
		<?php echo numero_n_sinver($con); ?>
	</div>
	<div class="list_notificaciones">
	</div>
</div>
<!-- Div notifiaciones -->
<!-- Lugar donde aparecera chat -->
	<?php /* actual_chat(conexion, id tarea, id usuario) */ echo actual_chat($con, '1', 10, $variable_usuario); ?>
<!-- Lugar donde aparecera chat -->
</body>
</html>