<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['email']) || empty($_POST['senha'])) {
        header('Location: login.php');
        exit();
    }

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, md5($_POST['senha']));

    $query = "SELECT * FROM operadores WHERE email_operador = '{$email}' AND senha_operador = '{$senha}'";
    $result = $conexao->query($query) or die($conexao->error);

    if ($result->num_rows == 1) {
        $dado = $result->fetch_array();

        $_SESSION['id_operador']          = $dado['id_operador'];
        $_SESSION['nome_operador']        = $dado['nome_operador'];
        $_SESSION['sobrenome_operador']   = $dado['sobrenome_operador'];
        $_SESSION['email_operador']       = $email;
        $_SESSION['nivel']                = $dado['nivel'];

        header('Location: index.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: login.php');
        exit();
    }

} else {
    header('Location: login.php');
    exit();
}
?>
