<?php

    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $nome =  $_POST['nome'];
        $email =  $_POST['email'];
        $telefone =  $_POST['telefone'];
        $senha =  $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO Usuarios(nome,email,telefone,senha) VALUES ('$nome','$email','$telefone','$senha')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="https://logospng.org/download/c-plus-plus/c-plus-plus-256.png" type="image/x-icon">
<link rel="stylesheet" href="/css/form.css">
<title>Formulário | CDS</title>
</head>
<body>
<div class="box">
    <form action="form.php" method="POST">
        <fieldset>
            <legend><b>Fórmulário de Clientes</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome completo</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit" onclick="msg()">
        </fieldset>
    </form>
</div>
<script>
    function msg() {
  alert("Você acabou de se cadastrar no site http://cdscodes.unaux.com !");
}
</script>
</body>
</html>