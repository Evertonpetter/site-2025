<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formulario de contato</title>
</head>
<body>
    <form action="processa_dados.php"method="POST">
        <table border="1" width="400">
            <tr>
                <td><label for="campo_nome"> nome :</label></td>
                <td><input type="text"id="campo_nome" name="nome_usuario" size="30" placeholder="seu nome completo" required></td>
            </tr>
            <tr>
                <td><label for="campo_email"> email :</label></td>
                <td><input type="text"id="campo_email" name="email_usuario" size="30" placeholder="seuemail@.com" required></td>
            </tr>
            <tr>
                <td colspan="2" align="conter">
                    <button type="submit"> enviar dados </button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>