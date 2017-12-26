<?php
//requisito
require('cox.php');
require('chat/sup_notificaciones.php');

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Notificaciones</title>
	<!-- Requisitos notificaciones -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="chat/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<link rel="stylesheet" type="text/css" href="chat/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="chat/css/notificaciones.css">
	<script type="text/javascript">
		var last_id_rec = <?php echo ultimovisto($con); ?>;
	</script>
	<script type="text/javascript" src="chat/solo_notificaciones.js"></script>
	<!-- Requisitos notificaciones -->
</head>
<body>

<!-- Div notifiaciones -->
<div id="div_icono_notificaciones" class="div_icono">
	<div class="burbuja">
	
		<?php echo numero_n_sinver($con); ?>
	</div>
	<div class="list_notificaciones">
	</div>
<!-- Div notifiaciones -->
</div>


</body>
</html>