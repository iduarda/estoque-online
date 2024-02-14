<?php

    session_start();
    // print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Estoque</title>
    <style>
             * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }
        body{
            background-image: linear-gradient(45deg, #3ed6ae, #5ec2d4);
            color: #fff;
            text-align: center;
            line-height: 50px;
        }

        h1{
            color: black;
            margin-top: 20px;
        }

        h2{
            color: #747474;
            text-align: left;
            border-bottom: 1px dashed #FFBD5A;
            padding: 0px;
        }

        hr{
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .cont{
            display: flex;
            align-items: center;
            background-color: #F6F4F4;
        }

        .box{
            font-family: 'Arial Black';
            background-color: #F6F4F4;
            width: 750px;
            height: 300px;
            color: black;
            margin-left: 30px;
        }

        .image{
            width: 480px;
            height: 330px;
            border: 50px solid #fde3a7d7;
            border-radius: 10px;
        }

        .box-2{
            padding: 100px;
        }

        ul{
            font-family: 'Arial Narrow';
            font-size: 20px;
            line-height: 70px;
            text-align: left;
            padding: 10px;
            align-items: center;
            margin-top: 30px;
            list-style-type: none;
        }

        .center{
            text-align: center;
            border: 1px solid #3ed6ae;
            margin-left: 175px;
            margin-right: 175px;
            background-color: #3ed6ae;
            border-radius: 20px;
            padding: -10px;
        }

        .right{
            text-align: right;
        }
    </style>
</head>
<body>
    <?php

        echo "<h1>Bem vindo <u>$logado</u></h1>";

    ?>
    <hr>
    <div class="cont">
        <div class="box">
            <h2>EASY ESTOQUE: Estoque online</h2>
            <p>
                <ul>
                    <li>FAÇA SEU ESTOQUE FÁCIL E RÁPIDO</li>
                    <li class="center">SIMPLIFIQUE A SUA VIDA NO COMÉRCIO</li>
                    <li class="right">CADASTRE, EDITE E EXCLUA OS PRODUTOS</li>
                </ul>
            </p>
        </div>
        <div class="box-2">
            <img  class="image" src="estoque.png" alt="Estoque">
        </div>
    </div>
    <hr>
</body>
</html>
