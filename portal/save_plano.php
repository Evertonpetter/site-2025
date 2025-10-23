<?php
include('verifica_login.php');
include('conexao.php');

$niveldapagina = array($mestre, $colaborador);
$id_plano      = filter_input(INPUT_GET, 'id_plano', FILTER_SANITIZE_NUMBER_INT);

if (!in_array ($nivel, $niveldapagina)) {
    echo
        "<script>
            alert('Você não tem permissão para acessar essa área!')
            history.go(-1);
        </script>";

} else if (!empty('id_plano')) {

    $nome_plano = $_POST['nome_plano'];
    $desc_plano = $_POST['desc_plano'];
    $vlr_plano  = $_POST['vlr_plano'];

    $sql_code = "UPDATE planos SET nome_plano='$nome_plano', desc_plano='$desc_plano', vlr_plano ='$vlr_plano' WHERE id_plano='$id_plano'"; 

    if($conexao->query($sql_code) or die($conexao->error)){

        $_SESSION['msgListarPlanos']= "<center><div class='alert alert-success' role='alert'> ok,o plano foi enviado com sucesso! </div></center>";
        header('location: listar_planos.php');
    }else{
        $_SESSION['msgListarPlanos']= "<center><div class='alert alert-danger' role='alert'> Erro,o plano não foi enviado com sucesso </div></center>";
        header('location: listar_planos.php');
    }

} else {
    echo
    "<script> 
        alert('VIOLAÇÃO: tentativa ilegal de operação!')
        history.go(-1);
    </script>"; 
}
?>