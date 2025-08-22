<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Caixa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">

<div class="card p-4" style="max-width:350px; width:100%;">
    <h4 class="text-primary text-center mb-3">Resumo da Compra</h4>

    <?php
    $nomeProduto = "Camiseta TI";
    $precoUnitario = 79.90;
    $quantidadeComprada = 2;
    $temCupomDesconto = true;

    $subtotal = $precoUnitario * $quantidadeComprada;
    $temDesconto = ($subtotal > 200 || $temCupomDesconto);
    $desconto = $temDesconto ? $subtotal * 0.10 : 0;
    $total = $subtotal - $desconto;

    if ($temDesconto) {
        if ($subtotal > 200 && $temCupomDesconto) $msg = "Você ganhou 10% de desconto por subtotal maior que R$200 e cupom.";
        elseif ($subtotal > 200) $msg = "Você ganhou 10% de desconto por subtotal maior que R$200.";
        else $msg = "Você ganhou 10% de desconto por possuir cupom.";
        $alertClass = "success";
    } else {
        $msg = "Você não ganhou desconto.";
        $alertClass = "danger";
    }
    ?>
    <p><strong>Produto:</strong> <?= $nomeProduto ?></p>
    <p><strong>Preço:</strong> R$ <?= number_format($precoUnitario, 2, ',', '.') ?></p>
    <p><strong>Quantidade:</strong> <?= $quantidadeComprada ?></p>
    <p><strong>Subtotal:</strong> R$ <?= number_format($subtotal, 2, ',', '.') ?></p>

    <div class="alert alert-<?= $alertClass ?>"><?= $msg ?></div>

    <p><strong>Desconto:</strong> R$ <?= number_format($desconto, 2, ',', '.') ?></p>
    <h5 class="text-success">Total: R$ <?= number_format($total, 2, ',', '.') ?></h5>

</div>
</body>
</html>
