<?php
    //define o fuso horario como o horario de brasilia 
    date_default_timezone_set('America/sao_paulo');

    //cruar uma variavel e armezena a hora atual do fuso-horario defenido
    $datalocal = date('Y/m/d H:I:S' , time());

    header('content-Type: text/html; charset=utf-8');

    define('HOST', 'localhost');
    define('USUARIO', 'root');
    define('SENHA', '');
    define('BD', 'meusite31');

    $conexao = mysqli_connect(HOST,USUARIO,SENHA,BD) or die ('não foi possivel conectar!!!');

    mysqli_set_charset($conexao, "utf8");

    mysqli_query($conexao, "SET NAME 'utf8'");
    mysqli_query($conexao, ' SET character_set_connection=utf8');
    mysqli_query($conexao, ' SET character_set_client=utf8');
    mysqli_query($conexao, ' SET character_set_results=utf8');
?>