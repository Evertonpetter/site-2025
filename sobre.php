<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php include 'includes/head.php'; ?>
        <title> sobre </title>
    </head>
    <body>
    <?php include 'includes/header.php'; ?>
<div class="container">
        <br>
    
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page"> <a href="sobre.php">sobre</li>
  </ol>
</nav>
<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#lista-sobre" role="tab" aria-controls="home">sobre a empresa </a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#lista-missão" role="tab" aria-controls="profile">missão</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#lista-visão" role="tab" aria-controls="messages">visão</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#lista-valores" role="tab" aria-controls="settings">valores</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="lista-sobre" role="tabpanel" aria-labelledby="list-home-list">
      <p align='justify'>
        Desde 2009, a Forza Telecom tem se dedicado a oferecer as melhores soluções em conectividade, transformando a maneira como empresas e lares se conectam e se comunicam. Com sede em Constantina e filiais em Ronda Alta, Nonoai e Sarandi, atuamos em 19 cidades da região noroeste do estado, sempre com o compromisso de levar tecnologia de ponta e soluções personalizadas para os nossos clientes.
      </p>
    </div>
      <div class="tab-pane fade" id="lista-missão" role="tabpanel" aria-labelledby="list-profile-list">entregar um serviço de qualidade</div>
      <div class="tab-pane fade" id="lista-visão" role="tabpanel" aria-labelledby="list-messages-list"> uso oculos fundo de garafa</div>
      <div class="tab-pane fade" id="lista-valores" role="tabpanel" aria-labelledby="list-settings-list">quebrado</div>
    </div>
  </div>
</div>
</div>

    <br>
    <?php include 'includes/footer.php'; ?>
    </body>
</html>