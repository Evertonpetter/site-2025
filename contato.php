<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php include 'includes/head.php'; ?>
        <title> contato </title>
    </head>
    <body>
    <?php include 'includes/header.php'; ?>

  <div class="container">
    <form action="processa_contato.php" method="post">
        <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group col-md-6">
      <label for="idade">Idade</label>
      <input type="number" class="form-control" id="idade" name="idade" required min="0">
    </div>
  </div>

  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>

  <div class="form-group">
    <label for="telefone">Telefone de Contato</label>
    <input type="tel" class="form-control" id="telefone" name="telefone"  required title="Apenas números">
  </div>

  <div class="form-group">
    <label for="mensagem">Mensagem</label>
    <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <button type="submit" class="btn btn-success btn-block">Enviar</button>
    </div>
    <div class="form-group col-md-4">
      <button type="reset" class="btn btn-danger btn-block">Limpar</button>
    </div>
  </div>
</form>
</div>
    
    <?php include 'includes/footer.php'; ?>
    </body>
</html>