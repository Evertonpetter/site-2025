<!DOCTYPE html>
<html lang="en">
<head>
    <title>index / Página 1</title>
    <!---------------HEAD---------------> 
    <?php include 'includes/head.php';?>
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

            <form>
                <div class="form-row">
                    <div class="col">
                        <label for="nomePlano">* Nome</label>
                        <input type="text" class="form-control" placeholder="Nome do plano">
                    </div>
                    <div class="col">
                        <label for="descricaoPlano">* Descrição</label>
                        <input type="text" class="form-control" placeholder="Descreva detalhes do plano">
                    </div>
                    <div class="col">
                        <label for="valorPlano">* Valor</label>
                        <input type="text" class="form-control" placeholder="R$ 0,00">
                    </div>
                </div>
            </form>

            <br>
        </div>
        <footer









<footer>
<!---------------footer---------------> 
<?php include 'includes/footer.php';?>
</footer>
</body>
</html>