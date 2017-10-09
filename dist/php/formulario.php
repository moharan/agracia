<?php
// name // value
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

    $headers = 'From: Alta Gracia <noelia@agracia.cl>' . "\r\n" .
    'Cc: shadia@agracia.cl, rangibecerra@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion() ."\r\n".
    'MIME-Version: 1.0' . "\r\n" .
    'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $message = "
<b>Muchas Gracias por contactarte con Agracia.cl</b><br>
<p>La información que nos enviaste es la siguiente:<p><br>

    Nombre Apellido: " . $nombre . "<br>
	E-mail: " . $email . "<br>
    Comentarios: " . $mensaje . "<br>
    <br>
<p>Te contactaremos lo antes posible, por esta misma via o teléfonica<p><br>

<b>Estudio - Peluqueria - Maquillaje, 2017</b><br>
<br>
Muchas Gracias,<br>
<b> Alta Gracia </b>
<hr>

";

  $mail=  mail($email,"Hemos recibido tu mensaje a Alta Gracia",$message,$headers);
if ($mail){echo "Email enviado, Vuelve a visitarnos a agracia.cl";
    header( "refresh:0;http://www.agracia.cl/index.html" );;   }
else {echo "Problemas para enviar el correo, intentalo más tarde";}
?>
