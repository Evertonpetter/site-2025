<!DOCTYPE html>
<html lang="en">
<head>
    <title>index / Página 1</title>
    <!---------------HEAD---------------> 
    <?php include 'includes/head.php';?>
    <!-- Font Awesome (para os ícones) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header>
        <!---------------HEADER---------------> 
        <?php include 'includes/header.php';?>
    </header>

    <div class="container">
        <br>
        <center><h5> PREENCHA OS CAMPOS ABAIXO PARA ADICIONAR UM NOVO PLANO </h5></center>
        <hr>

        <!-- FORMULÁRIO -->
        <form action="cad_planos.php" method="POST">
            <div class="form-row">
                <div class="col">
                    <label for="nomePlano">* Nome</label>
                    <input type="text" class="form-control" id="nomePlano" name="nomePlano" placeholder="Nome do plano" required>
                </div>
                <div class="col">
                    <label for="descricaoPlano">* Descrição</label>
                    <input type="text" class="form-control" id="descricaoPlano" name="descricaoPlano" placeholder="Descreva detalhes do plano" required>
                </div>
                <div class="col">
                    <label for="valorPlano">* Valor</label>
                    <input type="text" class="form-control" id="valorPlano" name="valorPlano" placeholder="R$ 0,00" required>
                </div>
            </div>

            <br>

            <!-- BOTÕES -->
            <button type="submit" class="btn btn-primary" name="sand" id="sand">
                <i class="fa fa-paste" style="font-size:25px;"></i><br>
                ✔ Enviar
            </button>

            <button type="reset" class="btn btn-warning" name="limpa" id="limpa">
                <i class="fa fa-eraser" style="font-size:25px;"></i><br>
                🧹 Limpar
            </button>
        </form>

        <br>
    </div>

    <footer>
        <!---------------footer---------------> 
        <?php include 'includes/footer.php';?>
    </footer>
</body>
</html>
