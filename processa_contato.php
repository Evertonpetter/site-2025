<?php
if (!empty($_POST['nome'])  AND !empty($_POST['idade']) AND !empty($_POST['email']) AND !empty($_POST['telefone']) AND !empty($_POST['mensagem'])) {

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

} else {
    echo "<script>
            alert('VIOLAÇÃO : tentativa ilegal de operação!');
            history.go(-1);
        </script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Dados Recebidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include 'includes/head.php'; ?>
</head>
<body class="bg-light">

<?php include 'includes/header.php'; ?>
    <div class="d-flex justify-content-center mt-3">
    <div class="alert alert-primary text-center" role="alert">
        SEUS DADOS FORAM RECEBIDOS COM SUCESSO!
    </div>
</div>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card p-4" style="max-width: 400px; width: 100%;">

        <h4 class="text-primary text-center mb-3">Dados Recebidos</h4>

        <p><strong>Nome:</strong> <?= $nome ?></p>
        <p><strong>Idade:</strong> <?= $idade ?></p>
        <p><strong>E-mail:</strong> <?= $email ?></p>
        <p><strong>Telefone:</strong> <?= $telefone ?></p>
        <p><strong>Mensagem:</strong><br><?= $mensagem ?></p>

        <div class="text-center mt-3">
            <a href="contato.php" class="btn btn-primary btn-sm">Voltar</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>
