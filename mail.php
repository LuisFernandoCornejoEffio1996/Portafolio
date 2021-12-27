<?php
    $to = "lfernandoce96@gmail.com";
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['msj'];

    $header = "Enviado desde Portafolio";

    $msjAll = $message . "\nAtentamente: " .$name;
    
    mail($to, $subject, $msjAll, $header);
    echo "<script>alert('Envio Exitoso')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";
?>