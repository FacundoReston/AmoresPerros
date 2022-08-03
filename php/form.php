<?php

$pregunta = $_POST ['mensaje'];

$pregunta .= "Mensaje: " . $_POST ['mensaje']
$pregunta .= "Enviado el " . date('d/m/Y', time());

$para = 'guzmanmariabelen@hotmail.com'
$asunto = 'Este mail fue enviado desde la web AmoresPerros'

mail($para, $asunto, utf8_decode($pregunta), $header);

header('Location:exito.html');
?>