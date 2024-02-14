<?php

    if(isset($_POST['submit'])){
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Senha: ' . $_POST['senha']);
        // print_r('Cnpj: ' . $_POST['cnpj']);
        // print_r('Nome da loja: ' . $_POST['nomeloja']);
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $cnpj = $_POST ['cnpj'];
        $nomeloja = $_POST ['nomeloja'];

        $result = mysqli_query($conexao, "INSERT INTO usuario (nome, email, telefone, senha, cnpj, nomeloja) 
        VALUES ('$nome', '$email', '$telefone', '$senha', '$cnpj', '$nomeloja')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, #3ed6ae, #5ec2d4);
        }
        .box{
            color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid #1f9bed;
        }
        legend{
            border: 2px solid #1f9bed;
            padding: 10px;
            text-align: center;
            background-color: #1f9bed;
            border-radius: 9px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            color: #fff;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput, .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: #1f9bed;
        }
        #submit{
            background-image: linear-gradient(45deg, #1f9bed, #1f9bed);
            width: 100%;
            border: none;
            padding: 13px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px; 
        }
        #submit:hover{
            background-image: linear-gradient(45deg, #43abf0, #43abf0);
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
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
                <div class="inputBox">
                    <input type="text" name="nomeloja" id="nomeloja" class="inputUser" required>
                    <label for="nomeloja" class="labelInput">Nome da loja</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cnpj" id="cnpj" class="inputUser" required>
                    <label for="cnpj" class="labelInput">CNPJ</label>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
