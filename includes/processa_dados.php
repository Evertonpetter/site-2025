<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados Recebidos do Formulario</h1>
    <hr>

    <?php
        if (!empty($_POST['email_usuario']) and !empty($_POST['nome_usuario'])) {
            $nome = $_POST['nome_usuario'];
            $email = $_POST['email_usuario'];
        
            echo "<h2> Olá,".$nome."!</h2>";
            echo "<p> Recebemos seus dados. Seu email é: <strong>".$email."</strong></p>";
        } else {
            echo "<script>
                    alert('VIOLAÇÃO : tentativa ilegal de operação!')
                    history.go (-1)
                </script>";
        }
    ?>
    <hr>
    <a href="formulario.php" method="POST">
    <button>voltar</button>
</body>
</html>