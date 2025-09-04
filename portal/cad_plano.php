<?php
include('verefica_login.php');
include('conexao.php');

$niveldapagina = array($mestre, $colaborador);

if (!in_array($nivel, $niveldapagina)) {
    echo "
        <script>
            alert('Você não tem permissão para acessar essa área!');
            history.go(-1);
        </script>
    ";
}

$dadosRecebidos = false;
if (
    !empty($_POST['nome_plano']) &&
    !empty($_POST['desc_plano']) &&
    !empty($_POST['vlr_plano'])
) {
    $nome_plano = $_POST['nome_plano'];
    $desc_plano = $_POST['desc_plano'];
    $vlr_plano  = $_POST['vlr_plano'];

    $dadosRecebidos = true; 
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "
        <script> 
            alert('VIOLAÇÃO: todos os campos devem ser preenchidos!');
            history.go(-1);
        </script>
    ";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro de Plano | Meu Portal</title>
    <!------------------------------------ HEAD ------------------------------------>
    <?php include 'includes/head.php'; ?>
    <!------------------------------------ HEAD ------------------------------------>
</head>
<body>
    <!--------------------------------- HEADER --------------------------------->
    <header>
        <?php include 'includes/header.php'; ?>
    </header>
    <!--------------------------------- HEADER --------------------------------->

    <main class="container mt-4">
        <h2>Cadastro de Plano</h2>

        <?php if ($dadosRecebidos): ?>
            <div class="alert alert-success mt-3">
                <h4>Dados recebidos:</h4>
                <p><strong>Nome do plano:</strong> <?= $nome_plano ?></p>
                <p><strong>Descrição:</strong> <?= $desc_plano ?></p>
                <p><strong>Valor:</strong> R$ <?= $vlr_plano ?></p>
            </div>
        <?php else: ?>
            <div class="alert alert-info mt-3">
                Nenhum dado foi enviado ainda. Preencha o formulário e envie.
            </div>
        <?php endif; ?>
    </main>

    <!------------------------------- FOOTER ----------------------------------->
    <footer >
        <?php include 'includes/footer.php'; ?>
    </footer>
    <!------------------------------- FOOTER ----------------------------------->
</body>
</html>
