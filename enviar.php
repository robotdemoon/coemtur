<?php

    //Recibir los datos por post
    $r = [];

    if(isset($_POST['name'], $_POST['msg'], $_POST['subject'], $_POST['email'])){
        $sender = $_POST['email'];
        $msg = $_POST['msg'];
        $subject = $_POST['subject'];
        $name = $_POST['name'];
        /*ini_set( 'display_errors', 1 );

        //Enviamos el correo
        error_reporting( E_ALL );
        $to = "robotdemn@gmail.com";
        $headers = "From:" . $sender;
        mail($to,$subject,$msg, $headers);*/
        $from = "test@hostinger-tutorials.com";
        $to = "robotdemn@gmail.com";
        $subject = "Checking PHP mail";
        $message = "PHP mail works just fine";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);

        $r = ["e" => false];
    }else{
        $r = ["e" => true];
    }
    return json_encode($r);