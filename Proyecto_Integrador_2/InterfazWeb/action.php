<?php
ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', 587);

$nombre = $_POST['nombre'];
$to = $_POST['mail'];
$asunto = 'Mensaje de Pagina Web';
$mensaje = "Hola $nombre \n\n" . $_POST['mensaje'];

if(mail($to, $asunto, $mensaje))
{
    echo '<script>alert("Mensaje enviado")</script>';
}
else 
{
    echo '<script>alert("Error! Problema detectado")</script>';
}

?>