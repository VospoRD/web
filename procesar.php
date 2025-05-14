<?php
// Primero los requires con rutas absolutas
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

// Luego los namespaces correctos
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);
    
    try {
        // Configuración del servidor
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'wacruzb16@gmail.com';
        $mail->Password = 'Pokemon$02';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Destinatarios
        $mail->setFrom('wacruzb16@gmail.com', 'DTF Pro');
        $mail->addAddress('wacruzb16@gmail.com');
        $mail->addReplyTo($_POST['email'], $_POST['nombre']);

        // Contenido
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo mensaje de contacto VOSPO';
        
        $contenido = "
        <h2>Nuevo mensaje de contacto</h2>
        <p><strong>Nombre:</strong> {$_POST['nombre']}</p>
        <p><strong>Email:</strong> {$_POST['email']}</p>
        <p><strong>Teléfono:</strong> {$_POST['telefono']}</p>
        <p><strong>Mensaje:</strong><br>{$_POST['mensaje']}</p>
        ";

        $mail->Body = $contenido;

        // Manejar archivo adjunto
        if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
            $archivo = $_FILES['archivo'];
            $nombreArchivo = $archivo['name'];
            $rutaTemporal = $archivo['tmp_name'];
            
            // Mover archivo a carpeta uploads
            $carpetaDestino = "uploads/";
            if (!file_exists($carpetaDestino)) {
                mkdir($carpetaDestino, 0777, true);
            }
            
            $rutaDestino = $carpetaDestino . $nombreArchivo;
            move_uploaded_file($rutaTemporal, $rutaDestino);
            
            // Adjuntar al correo
            $mail->addAttachment($rutaDestino, $nombreArchivo);
        }

        $mail->send();
        echo "<script>
                alert('¡Mensaje enviado con éxito!');
                window.location.href = 'index.php';
              </script>";
    } catch (Exception $e) {
        echo "<script>
                alert('Error al enviar el mensaje: {$mail->ErrorInfo}');
                window.location.href = 'index.php';
              </script>";
    }
}
?>
