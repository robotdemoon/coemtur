<?php

    ini_set( 'display_errors', 0 );
    error_reporting(0);
    //Recibir los datos por post

    if(isset($_POST['name'], $_POST['msg'], $_POST['subject'], $_POST['email'])){
        $sender = $_POST['email'];
        $msg = $_POST['msg'];
        $subject = $_POST['subject'];
        $name = $_POST['name'];

        //Enviamos el correo

        $to = "robotdemn@gmail.com";
        $headers = "From:" . strip_tags($sender). "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $message = '<html><body>';
        $message .= "<h2 style='color:#4D4D4D;text-align:center;border-bottom: 1px solid #4D4D4D; padding-bottom: 30px;'>Mensaje enviado desde COEMTUR.COM</h2>";
        $message .= "<h4 style='color:#4D4D4D;text-align:center;padding-bottom:15px;'> ".$subject.' </h4>';
        $message .= '<p></p>';
        $message .= '<p></p>';
        $message .= "<p style='text-align:center;opacity:0.9;'>".strip_tags($msg).'</p>';
        $message .= "</body></html>";


        mail($to, $subject, $message, $headers);

        return "true";
    }else{
        return "false";
    }