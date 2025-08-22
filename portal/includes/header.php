<nav class="navbar bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../midias/img/img11.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
    </a>

    <div class="d-flex flex-column align-items-end">
      <!-- Ícone e nome do usuário logado -->
      <i class='fa fa-user-circle' style='font-size:24px'>&ensp;
        <?php 
        if (isset($_SESSION['nome_operador'])) {
            echo htmlspecialchars($_SESSION['nome_operador']);
        } else {
            echo "Visitante";
        }
        ?>
      </i>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" id="header">
            <i class="fa fa-home me-2"></i>inicio
          </a>
        </li>

        <!-- Cadastro dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
            id="header">
            <i class="fa fa-plus me-2"></i>CADASTRO
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" style="color: black;" href="clientes.php" id="header">
                <i class="fa fa-user me-2"></i>CLIENTE
              </a>
            </li>
            <li>
              <a class="dropdown-item" style="color: black;" href="planos.php" id="header">
                <i class="fa fa-folder-open me-2"></i>PLANO
              </a>
            </li>
            <li>
              <a class="dropdown-item" style="color: black;" href="contato.php" id="header">
                <i class="fa fa-headphones me-2"></i> ATENDIMENTO
              </a>
            </li>
          </ul>
        </li>

        <!-- Fatura normal -->
        <li class="nav-item">
          <a class="nav-link" href="fatura.php" id="header">
            <i class="fa fa-newspaper-o me-2"></i>FATURA
          </a>
        </li>

        <!-- Listar dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
            id="header">
            <i class="fa fa-list me-2"></i>LISTAR
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" style="color: black;" href="listar_planos.php" id="header">
                <i class="fa fa-folder me-2"></i>PLANOS
              </a>
            </li>
            <li>
              <a class="dropdown-item" style="color: black;" href="listar_clientes.php" id="header">
                <i class="fa fa-users me-2"></i>CLIENTES
              </a>
            </li>
            <li>
              <a class="dropdown-item" style="color: black;" href="listar_atendimentos.php" id="header">
                <i class="fa fa-headphones me-2"></i>ATENDIMENTOS
              </a>
            </li>
          </ul>
        </li>

      </ul>
      <!-- Botão para logout -->
      <a href="logout.php" class="btn btn-outline-light">SAIR</a>
    </div>
  </div>
</nav>
