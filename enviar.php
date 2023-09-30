<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    $para = "garciadjesus37@gmail.com"; // Cambia esto por tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de contacto de $nombre";

    $mensaje_correo = "Nombre: $nombre\n";
    $mensaje_correo .= "Email: $email\n";
    $mensaje_correo .= "Mensaje:\n$mensaje";

    // Enviar el correo electrónico
    if (mail($para, $asunto, $mensaje_correo)) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Hubo un problema al enviar el correo.";
    }
} else {
    echo "Acceso no válido.";
}
?>
