<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, #3ed6ae, #5ec2d4);
        }
        div{
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            border-radius: 15px;
            color: #fff;
            text-align: center;
        }
        input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 17px;
        }
        .inputSubmit{
            background-color: #1f9bed;
            border: none;
            padding: 13px;
            width: 100%;
            border-radius: 10px;
            color: #fff;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: #43abf0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testelogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
