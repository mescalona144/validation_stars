<?php
$nombres=$_POST['nombres'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

//configuramos datos del mail
$destinatario="nimail@gmail.com";
$asunto="Email enviado desde mi sitio";

//cuerpo del mail

$cuerpo.="Nombres: ".$nombres."\n";
$cuerpo.="E-mail: ".$email."\n";
$cuerpo.="Consulta: ".$consulta."\n";
$cuerpo.="Pais: ".$pais."\n";

//Enviamos el email
mail($destinatario,$asunto,$cuerpo);
echo $nombre, "Gracias por contactarnos!"

?>