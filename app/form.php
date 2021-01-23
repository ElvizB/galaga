<?php

$nombre         = isset($_POST['nombre'])      ?   $_POST['nombre']      : '';
$telefono       = isset($_POST['telefono'])    ?   $_POST['telefono']    : '';
$email          = isset($_POST['email'])       ?   $_POST['email']       : '';
$clinica        = isset($_POST['clinica'])     ?   $_POST['clinica']     : '';
$hora           = isset($_POST['hora'])        ?   $_POST['hora']        : '';
$mensaje        = isset($_POST['mensaje'])     ?   $_POST['mensaje']     : '';
$contenido  = '
                <html>
                    <head>
                        <title>Email con HTML</title>
                    </head>
                    <body>
                        <h2 style="margin-bottom: 0;color: #0081c2">Llego la siguiente información :</h2>
                        <hr>
                        <p>Su nombre es : <strong>'.$nombre.'</strong></p>
                        <p>Su teléfono es : <strong>'.$telefono.'</strong></p>
                        <p>Su email es : <strong>'.$email.'</strong></p>
                        <p>La clínica escogida es : <strong>'.$clinica.'</strong></p>
                        <p>La hora de la cita es : <strong>'.$hora.'</strong></p>                 
                        <hr>
                        <p>Con el siguiente mensaje : <strong>'.$mensaje.'</strong></p>
                    </body>
                </html>';
$contenido .= "Enviado el : " . date('d-m-Y (H:i:s)', time());   

$headers    =   'MIME-Version: 1.0' . "\r\n";
$headers   .=  "Content-type: text/html; charset=UTF-8\r\n";

$destinatario   = 'hengui_fong@hotmail.com';
$asunto         = 'Formulario Agendemos una cita';

// Enviar correo
$sendMail   =   mail($destinatario, $asunto , $contenido, $headers);