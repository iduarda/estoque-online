<?php

    session_start();
    include_once('config.php');
    // print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

    if(!empty($_GET['search'])){
        $data = $_GET['search'];
        $sql = "SELECT * FROM itens WHERE nomeitem LIKE '%$data%' ORDER BY iditem DESC";
    }else{
        $sql = "SELECT * FROM itens ORDER BY iditem DESC";
    }

    $result = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-image: linear-gradient(45deg, #3ed6ae, #5ec2d4);
            color: #000;
            text-align: center;
        }
        .box-search{

            display: flex;
            justify-content: center;
            margin-top: 50px;
            gap: .5%;
            padding: 15px;
            align-items: center;
        }

        .top{
            margin: 30px;
            line-height: 30px;
        }

        h1{
            font-family: 'Monte';
        }
        h3{
            font-family: 'Arial Narrow';
            color: #1c1c1c;
            background-color: #FFDC8A;
            margin-top: 5px;
            margin-left: 500px;
            margin-right: 500px;
            border: 1px solid #FFDC8A;
            border-radius: 15px;
            box-shadow: 5px 5px 20px #0000001c;
        }

        table, th, td{
            border-bottom: 1px solid gray;
            border-collapse: collapse;
            padding: 10px 50px 10px 50px;
            background-color: #FAF3F3;
            color: #000;
        }

        table{
            margin: 10px auto;
            margin-top: 50px;
        }

        td{
            text-align: center;
        }
        
        hr{
            margin-top: 30px;
        }

        input{
            border-color: white;
            background-color: white;
            border-radius: 10px;
            padding: 10px;
            width: 200px;
        }

        .icone{
            border: 1px solid #4792F6;
            border-radius: 5px;
            background-color: #4792F6;
            padding: 5px;
            margin: 5px;
            align-items: center;
        }

        .icone-2{
            border: 1px solid #FF4A4A;
            border-radius: 5px;
            background-color: #FF4A4A;
            padding: 5px;
            margin: 5px;
            align-items: center;
        }

        .botao{
            background-color: white;
            border-color: white;
            border-radius: 50%;
            height: 30px;
            width: 30px;
        }

        .rodape{
            margin-top: 75px;
        }

    </style>
</head>
<body>
    <?php include_once("menu.php"); ?>

    <div class="top">
    
    <h1>PRODUTOS CADASTRADOS</h1>
    <h3>Veja os produtos que estão em seu estoque, edite ou exclua!</h3>

    </div>

    <hr>

    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar nome do produto" id="pesquisar">
        <button onclick="searchData()" class="botao">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    
    <div class="m-5">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor de Compra</th>
                    <th scope="col">Valor de Venda</th>
                    <th scope="col">Editar/Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    while($user_data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$user_data['iditem']."</td>";
                        echo "<td>".$user_data['nomeitem']."</td>";
                        echo "<td>".$user_data['quantitens']."</td>";
                        echo "<td>".$user_data['valcompraitens']."</td>";
                        echo "<td>".$user_data['valorvendaitens']."</td>";
                        echo "<td>
                                <a class='icone' href='editar.php?iditem=$user_data[iditem]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                </svg>
                                </a>
                                <a class='icone-2' href='excluir.php?iditem=$user_data[iditem]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                                </a>
                            </td>";
                        echo "<tr>";
                    }

                ?>
            </tbody>
        </table>
    </div>
    <hr class="rodape">
    <?php include_once("rodape.php"); ?>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event){
        if (event.key === "Enter"){
            searchData();
        }
    })

    function searchData(){
        window.location = 'listarproduto.php?search='+search.value;
    }
</script>
</html>
