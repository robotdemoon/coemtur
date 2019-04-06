<?php

    //Recibir los datos por post

    if(isset($_POST['form'])){
        $form = json_decode($_POST['form']);
        $sender = $form['email'];
        $msg = $form['msg'];
        $subject = $form['subject'];
        $name = $form['name'];
        ini_set( 'display_errors', 1 );

        //Enviamos el correo
        error_reporting( E_ALL );
        $from = "prueba@sender.com";
        $to = "robotdemn@gmail.com";
        $headers = "From:" . $sender;
        mail($to,$subject,$msg, $headers);
        $r = ['e' => false];
    }else{
        $r = ['e' => true];
    }
    return json_encode($r);