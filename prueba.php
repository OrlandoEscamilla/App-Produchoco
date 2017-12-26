<?php
require('cox.php');
include('enviar_notificaciones.php');
//enviar_notificaciones($conexion,$remitente,$mensaje,$enlace,$destinatario);
enviar_notificaciones($con,'perro','felicidades has ganado un perro','http://www.google.com','1');
?>