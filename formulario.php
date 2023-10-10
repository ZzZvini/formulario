<?php

//Com essa linha de codigo, no php ele está verificando se existe uma variavel submit 
// (e quando clicar em "ENVIAR" vai existir essa submit e vai incluir o arquivo de config.php, igual mostra na proxima linha de comando com cada parametro 
//e excutar no result):
if (isset($_POST['submit'])) {
    // para testar se está submitando:
    // print_r($_POST['nome']);
  
    // Para incluir a conexão:
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    // Criaçao da Query de insert, já com as inserçoes e os valores no banco de dados:
    // No INSERT INTO insiro as informações cadastradas na tabela do banco de dados , "INSERT INTO nome da tabela(nome,email,telefone,etc...)".
    // Na mesma linha do INSERT , para adicionar os valores, coloco um VALUES('$nome','$email','$telefone'....e as variaveis declaradas).
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>

<body>
    <a href="homepage.html"> Voltar </a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend> <b>Cadastro</b> </legend>
                <div class="inputBox">
                    <input type="text" name="nome" id="name" class="inputUser" required>
                    <label for="name" class="labelInput"> Nome Completo </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" id="senha" class="inputUser" required>
                    <label for="password" class="labelInput"> Senha </label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput"> Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <p>Sexo :</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino"> Feminino </label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino"> Masculino </label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro"> Outro </label>
                <br><br>

                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

</body>

</html>