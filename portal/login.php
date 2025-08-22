<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HEAD -->
    <?php include 'login/includes/head.php';?>
</head>

<body>
    <!-- HEADER -->
    <?php include 'login/includes/header.php';?>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="login/midias/img12.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="POST" action="autentica.php" onsubmit="return validarFormulario()">
                    <span class="login100-form-title">
                        Bem-vindo ao login do robô feito de Arduino!
                    </span>

                    <!-- CAMPO DE EMAIL -->
                    <div class="wrap-input100">
                        <input class="input100" type="text" name="email" id="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        <small id="alertaEmail" style="color: red; display: none;">O email precisa conter "@"</small>
                    </div>

                    <!-- CAMPO DE SENHA -->
                    <div class="wrap-input100">
                        <input class="input100" type="password" name="senha" placeholder="Digite a senha">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <!-- MENSAGEM DE ERRO PHP -->
                    <?php if (isset($_SESSION['nao_autenticado'])): ?>
                        <div style="color: red; text-align: center; margin-bottom: 10px;">
                            Usuário ou senha inválidos.
                        </div>
                        <?php unset($_SESSION['nao_autenticado']); ?>
                    <?php endif; ?>

                    <!-- BOTÃO LOGIN -->
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" style="background-color: blue; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px;">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">Esqueceu </span>
                        <a class="txt2" href="#">Nome de usuário / Senha?</a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="#">
                            Crie sua conta
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include 'login/includes/footer.php';?>

    <!-- VALIDAÇÃO JS AO CLICAR EM ENVIAR -->
    <script>
    function validarFormulario() {
        var email = document.getElementById("email").value;
        var alerta = document.getElementById("alertaEmail");

        if (email.indexOf("@") === -1) {
            alerta.style.display = "block";
            return false; // impede o envio do formulário
        } else {
            alerta.style.display = "none";
            return true; // permite envio se estiver válido
        }
    }
    </script>

</body>
</html>
