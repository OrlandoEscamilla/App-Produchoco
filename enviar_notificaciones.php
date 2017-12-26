<?php
function enviar_notificaciones($con,$remitente,$mensaje,$enlace,$destinatario){
	$tipo = "";
	 $re_pre="SELECT * FROM remitentes_predeterminados WHERE clave = '".$remitente."'";
            if ($re_preb=mysqli_query($con,$re_pre))
            {
                $re_prea = mysqli_num_rows($re_preb);
                if($re_prea > 0){
                	$tipo = "2";
                }else{
                	$tipo = "1";
                }
            }
            $fecha = date('Y-m-j');
            $time = time();
$tiempo = date("H:i:s", $time);
    	$insertar="INSERT INTO notificaciones(id,fecha_creada,hora_creada,descripciones,enlace,id_remitente,id_destinatario,tipo) VALUES (null,'".$fecha."','".$tiempo."','".$mensaje."','".$enlace."','".$remitente."','".$destinatario."','".$tipo."')";
		mysqli_query($con,$insertar);
}
?>