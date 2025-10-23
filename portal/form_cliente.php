<?php
include('verefica_login.php');
include('conexao.php');

$niveldapagina = array($mestre, $colaborador);

if(!in_array ($nivel, $niveldapagina)){
    echo
        "<script>
                alert('Você não tem permissão para acessar essa área!
                history.go(-1);
        </script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <title> INÍCIO | Meu Portal </title>
     <?php include 'includes/head.php'; ?>
    </head>
    <body>
        <header>
     <?php include 'includes/header.php'; ?>
        </header>
        <div class="container">
            <br>

            <center><h5> PREENCHA OS CAMPOS ABAIXO PARA ADICIONAR UM NOVO CLIENTE </h5></center>

            <hr>
            <?php
                if(isset($_SESSION['msgFormCliente'])){
                    echo $_SESSION['msgFormCliente'];
                    unset($_SESSION['msgFormCliente']);
                }
            ?>
            <form action="cad_cliente.php" method="POST">
                <div class="form-row">
                    <div class="col">
                        <label for="nomeCliente">* Nome</label>
                        <input type="text" class="form-control"  id="nome_cliente" name="nome_cliente" placeholder="Nome Completo">
                    </div>
                    <div class="col">
                        <label for="cpfCliente">* CPF</label>
                        <input type="text" class="form-control" id="cpf_cliente" name="cpf_cliente" minlength="14" placeholder="001.002.003-04">
                    </div>
                    <div class="col">
                        <label for="rgCliente">* RG</label>
                        <input type="text" class="form-control" id="rg_cliente" name="rg_cliente" placeholder="01020304">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="nomeCliente">* Plano</label>
                        <select class="form-control">
                            <option> Escolha uma plano </option>
                            <?php 
                            $consultaPlano = "SELECT * FROM planos ORDER BY nome_plano ASC";

                            $conPlano = $conexao->query($consultaPlano) or die ($conexao->error);

                                while($dadoPlano = $conPlano->fetch_array()){
                                        $id_plano = $dadoPlano['id_plano'];
                                        $nome_plano = $dadoPlano['nome_plano'];

                                        echo "<option value='$id_plano'> $nome_plano </option>";
                                }
                            ?> 
                        </select>
                    </div>
                </div>    

                <hr>
                <button type="submit" class="btn btn-primary" name="send" id="send">
                    <i class='fa fa-paste' style="font-size:25px";></i>
                Cadastrar
                </button>
                <button type="button" class="btn btn-warning" name="limpa" id="limpa" onclick='form.reset()'>
                <i class='fa fa-eraser' style="font-size:25px;"></i>
                <br>
                Limpar
                </button>
            </form>

            <br>
        </div>
        <footer>
            <?php include 'includes/footer.php'; ?>
        </footer>
    </body>
</html>
