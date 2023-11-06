<?php
//VARIABLES
$rating=$_POST['rating'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];

//configuramos datos del mail
$destinatario="mescalona144@gmail.com";
$asunto="Comentario enviado desde mi sitio";

//cuerpo del mail
$cuerpo.="rating: ".$rating."\n";
$cuerpo.="Nombres: ".$nombre."\n";
$cuerpo.="E-mail: ".$correo."\n";
$cuerpo.="Comentario: ".$mensaje."\n";


//Vista del email
mail($destinatario,$asunto,$cuerpo);
echo $nombre, " ", $apellidos, ",", " ", "Gracias por contactarnos!"
/* header('Location:location.html') */

?>