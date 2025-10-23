<?php
include('verefica_login.php');
include('conexao.php');

$niveldapagina = array($mestre, $colaborador);
$id_plano      = filter_input(INPUT_GET, 'id_plano', FILTER_SANITIZE_NUMBER_INT);

if(!in_array ($nivel, $niveldapagina)) {
    echo
        "<script>
            alert('Você não tem permissão para acessar essa área!')
            history.go(-1);
        </script>";
} elseif(!empty($id_plano)){
    
    $consulta = "SELECT * FROM planos WHERE id_plano = '$id_plano'";

    $con = $conexao->query($consulta) or die ($conexao->error);

    while($dado = $con->fetch_array()){
        $nome_plano = $dado['nome_plano'];
        $desc_plano = $dado['desc_plano'];
        $vlr_plano = $dado['vlr_plano'];
    }

} else {
    header("location: listar_planos.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <title> INÍCIO | Meu Portal </title>
        <!------------------------------------ HEAD ------------------------------------>
        <?php include 'includes/head.php';?>
        <!------------------------------------ HEAD ------------------------------------>
    </head>
    <body>
        <header>
            <!--------------------------------- HEADER --------------------------------->
             <?php include 'includes/header.php';?>
            <!--------------------------------- HEADER --------------------------------->
        </header>
        <div class="container">
            <br>

            <center><h5> PREENCHA OS CAMPOS ABAIXO PARA ADICIONAR UM NOVO PLANO </h5></center>

            <hr>

            <form action="save_plano.php?id_plano=<?php echo $id_plano; ?>" method="POST">
                <div class="form-row">
                    <div class="col">
                        <label for="nomePlano">* Nome</label>
                        <input type="text" class="form-control" id="nome_plano" name="nome_plano" value="<?php echo $nome_plano; ?>">
                    </div>
                    <div class="col">
                        <label for="descricaoPlano">* Descrição</label>
                        <input type="text" class="form-control" id="desc_plano" name="desc_plano" value="<?php echo $desc_plano; ?>">
                    </div>
                    <div class="col">
                        <label for="valorPlano">* Valor</label>
                        <input type="text" class="form-control" id="vlr_plano" name="vlr_plano" value="<?php echo $vlr_plano; ?>">
                    </div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary" name="send" id="send">
                    <i class='fa fa-paste' style="font-size:25px;"></i> 
                    <br>
                Salvar 
                </button>

            </form>


            <?php

            if(isset($_SESSION['msgFormPlano']))
            {
                echo $_SESSION['msgFormPlano'];
                unset($_SESSION['msgFormPlano']);
            }


            ?>
        </div>
        <footer>
            <!------------------------------- FOOTER ----------------------------------->
            <?php include 'includes/footer.php';?>
            <!------------------------------- FOOTER ----------------------------------->
        </footer>
    </body>
</html>