<?php

$pregunta = $_POST ['mensaje'];
$excelente = $_POST ['atencion'];
$buena = $_POST ['atencion'];
$regular = $_POST ['atencion'];
$mala = $_POST ['atencion'];
$pesima = $_POST ['atencion'];

$pregunta .= "Mensaje: " . $_POST ['mensaje']
$pregunta .= "Enviado el " . date('d/m/Y', time());
$mensaje = "Valoración de atención al cliente: " . $_POST ['atencion']

$para = 'guzmanmariabelen@hotmail.com'
$asunto = 'Este mail fue enviado desde la web AmoresPerros'

mail($para, $asunto, utf8_decode($pregunta), $header);

header('Location:exito.html');
?>