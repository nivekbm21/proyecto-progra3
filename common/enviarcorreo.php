    <?php

    $para = "dsanchezr1693@gmail.com";
    $asunto = "Prueba de SMTP local";
    $mensaje = "<table>
	<tr>
		<th>Nombre</th>
		<td>";
    $cabeceras = "From: nivekbm21@gmail.com" . "\r\n" .
    "Reply-To: dsanchezr1693@gmail.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    if(mail($para, $asunto, $mensaje, $cabeceras)) {
    echo "Correo enviado correctamente";
    } else {
    echo "Error al enviar mensaje";
    }
    ?>
