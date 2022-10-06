<?php
$email = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];
$correo = "Esta informacion fue recolectada desde el sitio web de Angel Ocampo.<br/>"
          ."El mesaje fue enviado por:"."<br/>".$email. "<br/>"
          ."Asunto:"."<br/>".$asunto. "<br/>"
          ."Mensaje:"."<br/>". $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);

try {
    //Configuracion del server
    $mail->SMTPDebug = 0;                                       //Para debuguear SMTP::DEBUG_SERVER;    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mboxhosting.com';                       //Set the SMTP server to send through
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sitio@angelocampoweb.ml';             //SMTP username
    $mail->Password   = 'Soporte.123';                       //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    

    $mail->setFrom('sitio@angelocampoweb.ml', 'Sitio Web');//Recipients remitente (quien envia)
    $mail->addAddress('angelocampo262@gmail.com', 'Angel Ocampo');     //aquien se envia

    //Contenido
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $correo;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '
    <script>
	alert ("Gracias por enviar su informacion, en breve me pondré en contacto con usted.");
    window.history.go(-2) ;
	</script>
	'; //-1 regresa una ventana anterior con -2 regresa al index
    
} catch (Exception $e) {
    echo "Hubo un error al enviar correo: {$mail->ErrorInfo}";
}

?>