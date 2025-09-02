<?php
    session_start();

    if(!$_SESSION['email_operador']){
        header('location: login.php');
        exit();

    }

        $USUARIO = $_SESSION['id_operador'];
        $nome_operador = $_SESSION['nome_operador'];
        $sobrenome_operador = $_SESSION['sobrenome_operador'];
        $nivel = $_SESSION['nivel'];

        $mestre      = 1;
        $colaborador = 2;
        $cliente     = 3;
?>