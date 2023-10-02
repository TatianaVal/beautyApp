<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($nombre, $email, $token) {

        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }
    public function enviarConfirmacion() {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '7cd62d4aaab83c';
        $mail->Password = '10721362575fe1';

        $mail->setFrom('cuentas@appsalon.com', 'AppSalon.com');
        $mail->addAddress($this->email);
        // $mail->addAddress($this->email);    
        $mail->Subject = 'Confirma tu cuenta';

        // Set HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        
        $contenido = "<html>"; 
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado una
        cuenta en App Salon, solo debes confirmar presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:8080/confirmar-cuenta?token="
        . $this->token . "'>Confirmar Cuenta</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puede ignorar el mensaje.</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Debuguear los errores
        $mail->send();
    }
    public function enviarInstrucciones() {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '7cd62d4aaab83c';
        $mail->Password = '10721362575fe1';

        $mail->setFrom('cuentas@appsalon.com', 'AppSalon.com');
        $mail->addAddress($this->email);    
        $mail->Subject = 'Restablece tu password';

        // Set HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        
        $contenido = "<html>"; 
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado restablecer
        tu password, sigue el siguiente enlace para hacerlo. </p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:8080/recuperar?token="
        . $this->token . "'>Restablecer Paswword</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puede ignorar el mensaje.</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Debuguear los errores
        $mail->send();
    }
}