<?php
@session_start();
$con=mysqli_connect("localhost","root","cacadepato","danivas");
mysqli_set_charset($con, 'utf8');

$variable_usuario = "jkikj";
if (!empty ($_SESSION['id_userr'])){
$variable_usuario = $_SESSION['id_userr'];
}



$ruta_fotos_perfil = "asd";
$ruta_fotos_remitentes_predeterminados = "chat/remitentes_predeterminados/";
?>